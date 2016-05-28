<?php

class Api
{

    private $apiKey = 'add-your-api-key';

    private $version;

    private $curl;

    function __construct()
    {
        $this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);

        $this->version = $this->getLatestCDNVersion();
    }

    function __destruct()
    {
        curl_close($this->curl);
    }

    private function getPlatform($region){
        $platformList = array(
            "NA" => "NA1",
            "EUW" => "EUW1",
            "EUNE" => "EUN1",
            "KR" => "KR",
            "OCE" => "OC1",
            "BR" => "BR1",
            "LAN" => "LA1",
            "LAS" => "LA2",
            "RU" => "RU",
            "TR" => "TR1",
            "JP" => "JP1",
        );

        return $platformList[strtoupper($region)];
    }

    public function getLatestCDNVersion(){
        $url = "https://ddragon.leagueoflegends.com/api/versions.json";
        $versions = file_get_contents($url);
        $versions = json_decode($versions);

        return $versions[0];
    }

    public function getSummoner($region, $name){

        //$apiKey
        $url = "https://{$region}.api.pvp.net/api/lol/{$region}/v1.4/summoner/by-name/" . rawurlencode($name) . "?api_key=" . $this->apiKey;

        curl_setopt($this->curl, CURLOPT_URL, $url);
        $data = curl_exec($this->curl);

        $data = json_decode($data, true);

        $data['error'] = false;
        if(isset($data['status'])){
            $data['error'] = true;
            $data['message'] =  $data['status']['status_code'].' '.$data['status']['message'];
            return $data;
        }
        $index = preg_replace('/\s+/', '', strtolower($name));
        $data['error'] = false;
        $data['message'] =  $data[$index];
        return $data;
    }

    public function getMyScore($region, $summoner_id) {
        $url = "https://{$region}.api.pvp.net/championmastery/location/" . $this->getPlatform($region) . "/player/{$summoner_id}/score?api_key=" . $this->apiKey;
        curl_setopt($this->curl, CURLOPT_URL, $url);
        $data = curl_exec($this->curl);
        $data2 = json_decode($data, true);

        if(is_array($data2) && isset($data2['status'])){
            $data2['error'] = true;
            $data2['message'] =  $data2['status']['status_code'].' '.$data2['status']['message'];
            return $data2;
        }

        return $data;
    }

    public function getChampionMastery($region, $summoner_id) {

        $url = "https://" .$region . ".api.pvp.net/championmastery/location/" . $this->getPlatform($region) . "/player/" . $summoner_id . "/champions?api_key=" . $this->apiKey;

        curl_setopt($this->curl, CURLOPT_URL, $url);
        $data = curl_exec($this->curl);

        $data = json_decode($data, true);

        if(isset($data['status'])){
            $data['error'] = true;
            $data['message'] =  $data['status']['status_code'].' '.$data['status']['message'];
            return $data;
        }

        $result = array();
        foreach ($data as $key => $item) {

            $result[$key] = $item;
            $result[$key]['lastPlayTime'] = $this->time_elapsed_string(date("Y-m-d H:i:s", $item['lastPlayTime']/1000));
            $result[$key]['championDetail'] = $this->getChampionName($region, $item['championId']);
        }

        return $result;
    }

    public function getAvatar($summoner_id) {
        return "http://ddragon.leagueoflegends.com/cdn/" . $this->version . "/img/profileicon/" . $summoner_id .".png";
    }

    public function getChampionName($region, $championId, $all = false)
    {
        if ($all) {
            $url = "https://global.api.pvp.net/api/lol/static-data/" . $region . "/v1.2/champion/" . $championId . "?champData=all&api_key=" . $this->apiKey;
        } else {
            $url = "https://global.api.pvp.net/api/lol/static-data/" . $region . "/v1.2/champion/" . $championId . "?champData=image,tags&api_key=" . $this->apiKey;
        }
        curl_setopt($this->curl, CURLOPT_URL, $url);
        $data = curl_exec($this->curl);

        $response = json_decode($data, true);
        return $response;
    }

    private function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }

    public function getAllChampions($region = 'eune')
    {
        $url = "https://global.api.pvp.net/api/lol/static-data/" . $region . "/v1.2/champion/?champData=image,tags&api_key=" . $this->apiKey;
        curl_setopt($this->curl, CURLOPT_URL, $url);
        $data = curl_exec($this->curl);

        $response = json_decode($data, true);
        return $response;
    }

    public function getRoleMaster($player_champions)
    {
        $roles = array(
            "Support" => 0,
            "Assassin" => 0,
            "Tank" => 0,
            "Fighter" => 0,
            "Mage" => 0,
            "Marksman" => 0
        );
        foreach($player_champions as $player_champion) {
            $roles[$player_champion['championDetail']['tags'][0]] = $roles[$player_champion['championDetail']['tags'][0]]+1;
        }
        arsort($roles);


        return array('all' => $roles, 'best' => key($roles));

    }

    public function getSummary($region, $summoner_id)
    {
        $url = 'https://' . $region . '.api.pvp.net/api/lol/' . $region . '/v1.3/stats/by-summoner/' . $summoner_id . '/summary?season=SEASON2016&api_key=' . $this->apiKey;
        curl_setopt($this->curl, CURLOPT_URL, $url);
        $data = curl_exec($this->curl);

        $response = json_decode($data, true);

        $result = array();
        foreach ($response['playerStatSummaries'] as $key => $item) {
            if ($item['playerStatSummaryType'] == 'Unranked') {
                $result['Classic'] = $item;
            } elseif ($item['playerStatSummaryType'] == 'AramUnranked5x5') {
                $result['Aram'] = $item;
            }
        }

        return $result;
    }
    public function getRanked($region, $summoner_id)
    {
        $url = "https://" . $region . ".api.pvp.net/api/lol/" . $region . "/v1.3/stats/by-summoner/" . $summoner_id . "/ranked?season=SEASON2016&api_key=" . $this->apiKey;
        curl_setopt($this->curl, CURLOPT_URL, $url);
        $data = curl_exec($this->curl);

        $response = json_decode($data, true);

        foreach ($response['champions'] as $key => $item) {
            if ($item['id'] != '0') {
                $response['champions'][$key]['championDetail'] = $this->getChampionName($region, $item['id']);
            } else {
                unset($response['champions'][$key]);
            }
        }

        return $response;
    }
}
