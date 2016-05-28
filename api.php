<?php

require_once "include/Api.php";

$api = new Api();
$version = $api->getLatestCDNVersion();
$action = $_GET['action'];
$data['success'] = 1;
$data['message'] = 0;
switch($action) {
    case "getSummoner":
        $my_player = $api->getSummoner($_POST['region'], $_POST['name']);

        if ($my_player['error']) {
            $data['success'] = 0;
            $data['message'] = $my_player['message'];
            echo json_encode($data);
        } else {
            $my_player = $my_player['message'];
            $my_champions = $api->getChampionMastery($_POST['region'], $my_player['id']);

            $role_master = $api->getRoleMaster($my_champions);

            if ($my_champions['error']) {
                $data['success'] = 0;
                $data['message'] = $my_champions['message'];
                $data['message2'] = "cannot reach the champion mastery";
                echo json_encode($data);
            } else {
                $url_profile_icon = $api->getAvatar($my_player['profileIconId']);
                $my_score = $api->getMyScore($_POST['region'], $my_player['id']);
                $my_summary = $api->getSummary($_POST['region'], $my_player['id']);

                $my_ranked = $api->getRanked($_POST['region'], $my_player['id']);
                if (is_array($my_score) && $my_score['error']) {
                    $data['success'] = 0;
                    $data['message'] = $my_score['message'];
                    $data['message2'] = "cannot reach the Score";
                    echo json_encode($data);
                } else {

                    $data['success'] = 1;
                    $data['version'] = $version;
                    $data['message'] = array(
                        'player' => $my_player,
                        'score' => $my_score,
                        'champions' => $my_champions,
                        'summary' => $my_summary,
                        'ranked' => $my_ranked,
                        'role_master' => $role_master,
                        'avatar' => $url_profile_icon,
                        'total' => count($my_champions)
                    );
                    echo json_encode($data);
                }
            }
        }
        break;

    case "getChampion":

        $data['success'] = 1;
        $data['message'] = 0;

        $get_champion = $api->getChampionName('euw', $_POST['id'],true);

        if ($get_champion['error']) {
            $data['success'] = 0;
            $data['message'] = $get_champion['message'];
            echo json_encode($data);
        } else {
            $data['success'] = 1;
            $data['version'] = $version;
            $data['message'] = array(
                'champion' => $get_champion,
            );
            echo json_encode($data);

        }
        break;
    default:
        break;
}
