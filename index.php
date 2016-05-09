<!DOCTYPE html>
<html>
<head>
    <title>The Champion Mastery Api Challenge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/circle-progress.js"></script>

</head>
<body>

<div class="header">
    <div class="container">
        <div class="nav">
            <ul>
                <li><a href="./">Home</a></li>
                <li><a href="champions.php">Champion Information</a></li>
                <li><a href="#" style="width:275px;  height:44px;"></a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="https://github.com/iulia1122/ChampionMasteryApi/" target="_blank" style="border:none;">Github</a></li>
            </ul>
            <div class="logo">

            </div>
        </div>
    </div>
</div>

<div class="container">

            <div class="welcome">
                <div class="hi">
                    <div class="first_row">
<!--                        <img src="--><?php //echo $url_profile_icon; ?><!--" alt="img" width="100"/>-->
                        <h1><i class="fa fa-group fa-1g" style="font-size:26px; margin-right:6px;"></i> Add summoner</h1>
                    </div>

                    <div class="second_row">

                        <form method="POST" action="" class="form_id_simple">
                            <select name="region">
                                <option value="euw">Europe West</option>
                                <option value="na">North America</option>
                                <option value="eune">Europe Nordic & East</option>
                                <option value="jp">Japan</option>
                                <option value="kr">Republic of Korea</option>
                                <option value="oce">Oceania</option>
                                <option value="br">Brazil</option>
                                <option value="lan">Latin America North</option>
                                <option value="las">Latin America South</option>
                                <option value="ru">Russia</option>
                                <option value="tr">Turkey</option>
                            </select>
                            <input type="text" placeholder="Summoner &nbsp;&#xF002" name="name" value="imnubcake"/>
                            <input type="submit" value="&#xf067; &nbsp; Add" class="add_player" data-href="single">

                        </form>
                    </div>

                    <div class="players">

                        <div id="openModal" class="modalDialog">
                            <div>
                                <a id="closeModal" href="javascript:void(0)" title="Close" class="close">X</a>
                                <h1><i class="fa fa-group fa-1g" style="font-size:26px; margin-right:6px;"></i> Add summoner</h1>
                                <form method="POST" action="" class="form_id">
                                    <select name="region">
                                        <option value="euw">Europe West</option>
                                        <option value="na">North America</option>
                                        <option value="eune">Europe Nordic & East</option>
                                        <option value="jp">Japan</option>
                                        <option value="kr">Republic of Korea</option>
                                        <option value="oce">Oceania</option>
                                        <option value="br">Brazil</option>
                                        <option value="lan">Latin America North</option>
                                        <option value="las">Latin America South</option>
                                        <option value="ru">Russia</option>
                                        <option value="tr">Turkey</option>
                                    </select>
                                    <input type="text" placeholder="Summoner &nbsp;&#xF002" name="name" value="imnubcake"/>
                                    <input type="hidden" value="" class="input_player" readonly/>
                                    <input type="submit" value="&#xf067; &nbsp; Add" class="add_player" data-href="modal">

                                </form>
                            </div>
                        </div>


                        <div id="player_1" class="player_empty">
                            <a  class="openModal" href="" data-id="1">
                                <div class="empty">
                                    <i class="fa fa-user fa-2x"></i>
                                </div>

                                <div class="circle">
                                    <i class="fa fa-plus fa-1g"></i>
                                </div>
                            </a>
                            <div style="" class="test">0<br><span style="font-size: 12px;">Points</span></div>
                        </div>

                        <div id="player_2" class="player_empty">
                            <a  class="openModal" href="" data-id="2">
                                <div class="empty">
                                    <i class="fa fa-user fa-2x"></i>
                                </div>

                                <div class="circle">
                                    <i class="fa fa-plus fa-1g"></i>
                                </div>
                            </a>
                            <div style="" class="test">0<br><span style="font-size: 12px;">Points</span></div>
                        </div>

                        <div id="player_3" class="player_empty">
                            <a class="openModal" href="" data-id="3">
                                <div class="empty">
                                    <i class="fa fa-user fa-2x"></i>
                                </div>

                                <div class="circle">
                                    <i class="fa fa-plus fa-1g"></i>
                                </div>
                            </a>
                            <div style="" class="test">0<br><span style="font-size: 12px;">Points</span></div>
                        </div>

                        <div id="player_4" class="player_empty">
                            <a class="openModal" href=""  data-id="4">
                                <div class="empty">
                                    <i class="fa fa-user fa-2x"></i>
                                </div>

                                <div class="circle">
                                    <i class="fa fa-plus fa-1g"></i>
                                </div>
                            </a>
                            <div style="" class="test">0<br><span style="font-size: 12px;">Points</span></div>
                        </div>

                        <div id="player_5" class="player_empty">
                            <a class="openModal" href="" data-id="5">
                                <div class="empty">
                                    <i class="fa fa-user fa-2x"></i>
                                </div>

                                <div class="circle">
                                    <i class="fa fa-plus fa-1g"></i>
                                </div>
                            </a>
                            <div style="" class="test">0<br><span style="font-size: 12px;">Points</span></div>
                        </div>

                    </div>

                </div>


            </div>

            <div id="champions">
                <div class="tab_name active" data-href="1">
                    <h2>Champions</h2>
                </div>
                <div class="tab_name" data-href="2">
                    <h2>ROLE</h2>
                </div>
                <div class="tab_name" data-href="3">
                    <h2>Summary</h2>
                </div>
                <div class="tab_name" data-href="4">
                    <h2>Ranked</h2>
                </div>
                <div id="top_1" class="top">
                        <div id="champion_1" class="col">

                            <div class="empty_col">
                                <i class="fa fa-user fa-2x"></i>
                            </div>
                            <div class="champion_empty">
                                <div class="add_summoner">
                                    <h3 style="padding-top:40px;">Add Summoner to see</h3>
                                    <h3>their champions</h3>
                                    <a class="openModal" href="" data-id="1">
                                        <i class="fa fa-plus fa-3x"></i>
                                    </a>
                                </div>

                                <div class="loading_box" style="display: none;">
                                    <h3 style="padding-top:40px;">Loading . . . </h3>
                                    <div class="cssload-loader"></div>
                                </div>
                            </div>

                        </div>


                    <div id="champion_2" class="col">

                        <div class="empty_col">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                        <div class="champion_empty">
                            <div class="add_summoner">
                                <h3 style="padding-top:40px;">Add Summoner to see</h3>
                                <h3>their champions</h3>
                                <a class="openModal" href="" data-id="2">
                                    <i class="fa fa-plus fa-3x"></i>
                                </a>
                            </div>

                            <div class="loading_box" style="display: none;">
                                <h3 style="padding-top:40px;">Loading . . . </h3>
                                <div class="cssload-loader"></div>
                            </div>
                        </div>

                    </div>

                    <div id="champion_3" class="col">

                        <div class="empty_col">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                        <div class="champion_empty">
                            <div class="add_summoner">
                                <h3 style="padding-top:40px;">Add Summoner to see</h3>
                                <h3>their champions</h3>
                                <a class="openModal" href="" data-id="3">
                                    <i class="fa fa-plus fa-3x"></i>
                                </a>
                            </div>

                            <div class="loading_box" style="display: none;">
                                <h3 style="padding-top:40px;">Loading . . . </h3>
                                <div class="cssload-loader"></div>
                            </div>
                        </div>

                    </div>

                    <div id="champion_4" class="col">

                        <div class="empty_col">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                        <div class="champion_empty">
                            <div class="add_summoner">
                                <h3 style="padding-top:40px;">Add Summoner to see</h3>
                                <h3>their champions</h3>
                                <a class="openModal" href="" data-id="4">
                                    <i class="fa fa-plus fa-3x"></i>
                                </a>
                            </div>

                            <div class="loading_box" style="display: none;">
                                <h3 style="padding-top:40px;">Loading . . . </h3>
                                <div class="cssload-loader"></div>
                            </div>
                        </div>

                    </div>

                    <div id="champion_5" class="col">

                        <div class="empty_col">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                        <div class="champion_empty">
                            <div class="add_summoner">
                                <h3 style="padding-top:40px;">Add Summoner to see</h3>
                                <h3>their champions</h3>
                                <a class="openModal" href="" data-id="5">
                                    <i class="fa fa-plus fa-3x"></i>
                                </a>
                            </div>

                            <div class="loading_box" style="display: none;">
                                <h3 style="padding-top:40px;">Loading . . . </h3>
                                <div class="cssload-loader"></div>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="top_2" class="top" style="display:none;">
                    <div id="role_1" class="col">

                        <div class="empty_col">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                        <div class="champion_empty">
                            <div class="add_summoner">
                                <h3 style="padding-top:40px;">Add Summoner to see</h3>
                                <h3>their most played role</h3>
                                <a class="openModal" href="" data-id="1">
                                    <i class="fa fa-plus fa-3x"></i>
                                </a>
                            </div>

                            <div class="loading_box" style="display: none;">
                                <h3 style="padding-top:40px;">Loading . . . </h3>
                                <div class="cssload-loader"></div>
                            </div>
                        </div>

                    </div>


                    <div id="role_2" class="col">

                        <div class="empty_col">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                        <div class="champion_empty">
                            <div class="add_summoner">
                                <h3 style="padding-top:40px;">Add Summoner to see</h3>
                                <h3>their most played role</h3>
                                <a class="openModal" href="" data-id="2">
                                    <i class="fa fa-plus fa-3x"></i>
                                </a>
                            </div>

                            <div class="loading_box" style="display: none;">
                                <h3 style="padding-top:40px;">Loading . . . </h3>
                                <div class="cssload-loader"></div>
                            </div>
                        </div>

                    </div>

                    <div id="role_3" class="col">

                        <div class="empty_col">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                        <div class="champion_empty">
                            <div class="add_summoner">
                                <h3 style="padding-top:40px;">Add Summoner to see</h3>
                                <h3>their most played role</h3>
                                <a class="openModal" href="" data-id="3">
                                    <i class="fa fa-plus fa-3x"></i>
                                </a>
                            </div>

                            <div class="loading_box" style="display: none;">
                                <h3 style="padding-top:40px;">Loading . . . </h3>
                                <div class="cssload-loader"></div>
                            </div>
                        </div>

                    </div>

                    <div id="role_4" class="col">

                        <div class="empty_col">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                        <div class="champion_empty">
                            <div class="add_summoner">
                                <h3 style="padding-top:40px;">Add Summoner to see</h3>
                                <h3>their most played role</h3>
                                <a class="openModal" href="" data-id="4">
                                    <i class="fa fa-plus fa-3x"></i>
                                </a>
                            </div>

                            <div class="loading_box" style="display: none;">
                                <h3 style="padding-top:40px;">Loading . . . </h3>
                                <div class="cssload-loader"></div>
                            </div>
                        </div>

                    </div>

                    <div id="role_5" class="col">

                        <div class="empty_col">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                        <div class="champion_empty">
                            <div class="add_summoner">
                                <h3 style="padding-top:40px;">Add Summoner to see</h3>
                                <h3>their most played role</h3>
                                <a class="openModal" href="" data-id="5">
                                    <i class="fa fa-plus fa-3x"></i>
                                </a>
                            </div>

                            <div class="loading_box" style="display: none;">
                                <h3 style="padding-top:40px;">Loading . . . </h3>
                                <div class="cssload-loader"></div>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="top_3" class="top" style="display:none;">
                    <div id="summary_1" class="col">

                        <div class="empty_col">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                        <div class="champion_empty">
                            <div class="add_summoner">
                                <h3 style="padding-top:40px;">Add Summoner to see</h3>
                                <h3>their summary</h3>
                                <a class="openModal" href="" data-id="1">
                                    <i class="fa fa-plus fa-3x"></i>
                                </a>
                            </div>

                            <div class="loading_box" style="display: none;">
                                <h3 style="padding-top:40px;">Loading . . . </h3>
                                <div class="cssload-loader"></div>
                            </div>
                        </div>

                    </div>


                    <div id="summary_2" class="col">

                        <div class="empty_col">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                        <div class="champion_empty">
                            <div class="add_summoner">
                                <h3 style="padding-top:40px;">Add Summoner to see</h3>
                                <h3>their summary</h3>
                                <a class="openModal" href="" data-id="2">
                                    <i class="fa fa-plus fa-3x"></i>
                                </a>
                            </div>

                            <div class="loading_box" style="display: none;">
                                <h3 style="padding-top:40px;">Loading . . . </h3>
                                <div class="cssload-loader"></div>
                            </div>
                        </div>

                    </div>

                    <div id="summary_3" class="col">

                        <div class="empty_col">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                        <div class="champion_empty">
                            <div class="add_summoner">
                                <h3 style="padding-top:40px;">Add Summoner to see</h3>
                                <h3>their summary</h3>
                                <a class="openModal" href="" data-id="3">
                                    <i class="fa fa-plus fa-3x"></i>
                                </a>
                            </div>

                            <div class="loading_box" style="display: none;">
                                <h3 style="padding-top:40px;">Loading . . . </h3>
                                <div class="cssload-loader"></div>
                            </div>
                        </div>

                    </div>

                    <div id="summary_4" class="col">

                        <div class="empty_col">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                        <div class="champion_empty">
                            <div class="add_summoner">
                                <h3 style="padding-top:40px;">Add Summoner to see</h3>
                                <h3>their summary</h3>
                                <a class="openModal" href="" data-id="4">
                                    <i class="fa fa-plus fa-3x"></i>
                                </a>
                            </div>

                            <div class="loading_box" style="display: none;">
                                <h3 style="padding-top:40px;">Loading . . . </h3>
                                <div class="cssload-loader"></div>
                            </div>
                        </div>

                    </div>

                    <div id="summary_5" class="col">

                        <div class="empty_col">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                        <div class="champion_empty">
                            <div class="add_summoner">
                                <h3 style="padding-top:40px;">Add Summoner to see</h3>
                                <h3>their summary</h3>
                                <a class="openModal" href="" data-id="5">
                                    <i class="fa fa-plus fa-3x"></i>
                                </a>
                            </div>

                            <div class="loading_box" style="display: none;">
                                <h3 style="padding-top:40px;">Loading . . . </h3>
                                <div class="cssload-loader"></div>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="top_4" class="top" style="display:none;">
                    <div id="ranked_1" class="col">

                        <div class="empty_col">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                        <div class="champion_empty">
                            <div class="add_summoner">
                                <h3 style="padding-top:40px;">Add Summoner to see</h3>
                                <h3>their ranked stats</h3>
                                <a class="openModal" href="" data-id="1">
                                    <i class="fa fa-plus fa-3x"></i>
                                </a>
                            </div>

                            <div class="loading_box" style="display: none;">
                                <h3 style="padding-top:40px;">Loading . . . </h3>
                                <div class="cssload-loader"></div>
                            </div>
                        </div>

                    </div>


                    <div id="ranked_2" class="col">

                        <div class="empty_col">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                        <div class="champion_empty">
                            <div class="add_summoner">
                                <h3 style="padding-top:40px;">Add Summoner to see</h3>
                                <h3>their ranked stats</h3>
                                <a class="openModal" href="" data-id="2">
                                    <i class="fa fa-plus fa-3x"></i>
                                </a>
                            </div>

                            <div class="loading_box" style="display: none;">
                                <h3 style="padding-top:40px;">Loading . . . </h3>
                                <div class="cssload-loader"></div>
                            </div>
                        </div>

                    </div>

                    <div id="ranked_3" class="col">

                        <div class="empty_col">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                        <div class="champion_empty">
                            <div class="add_summoner">
                                <h3 style="padding-top:40px;">Add Summoner to see</h3>
                                <h3>their ranked stats</h3>
                                <a class="openModal" href="" data-id="3">
                                    <i class="fa fa-plus fa-3x"></i>
                                </a>
                            </div>

                            <div class="loading_box" style="display: none;">
                                <h3 style="padding-top:40px;">Loading . . . </h3>
                                <div class="cssload-loader"></div>
                            </div>
                        </div>

                    </div>

                    <div id="ranked_4" class="col">

                        <div class="empty_col">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                        <div class="champion_empty">
                            <div class="add_summoner">
                                <h3 style="padding-top:40px;">Add Summoner to see</h3>
                                <h3>their ranked stats</h3>
                                <a class="openModal" href="" data-id="4">
                                    <i class="fa fa-plus fa-3x"></i>
                                </a>
                            </div>

                            <div class="loading_box" style="display: none;">
                                <h3 style="padding-top:40px;">Loading . . . </h3>
                                <div class="cssload-loader"></div>
                            </div>
                        </div>

                    </div>

                    <div id="ranked_5" class="col">

                        <div class="empty_col">
                            <i class="fa fa-user fa-2x"></i>
                        </div>
                        <div class="champion_empty">
                            <div class="add_summoner">
                                <h3 style="padding-top:40px;">Add Summoner to see</h3>
                                <h3>their ranked stats</h3>
                                <a class="openModal" href="" data-id="5">
                                    <i class="fa fa-plus fa-3x"></i>
                                </a>
                            </div>

                            <div class="loading_box" style="display: none;">
                                <h3 style="padding-top:40px;">Loading . . . </h3>
                                <div class="cssload-loader"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

    <div class="footer">
        <p> The Champion Mastery Api Challenge website isn't endorsed by Riot Games and doesn't reflect the views or
            opinions of Riot Games or anyone officially involved in producing or managing League of Legends. League of
            Legends and Riot Games are trademarks or registered trademarks of Riot Games, Inc. League of Legends &copy;
            Riot Games, Inc.</p>
    </div>

</div>


<script>


</script>
<script type="application/javascript">
    $('.circle_2').circleProgress({
        size: 60,
        thickness: 6,
        lineCap: 'round',
        emptyFill: 'rgba(255, 255, 255, 1)',
        fill: {color: '#ed1438'},
        startAngle: 4.7
    });
    $(function(){

        $(document).delegate('.tab_name','click', function(e) {
            e.preventDefault();
            var id = $(this).data('href');
            $('.top').hide();
            $('#top_' + id).fadeIn('slow');
            $('.tab_name').removeClass('active');
            $(this).addClass('active');

            return false;
        });


        $(document).delegate('#closeModal', 'click', function() {
            $('#openModal').removeClass('show');
        });

        $(document).delegate('.openModal', 'click', function(e) {
            e.preventDefault();
            $('#openModal').addClass('show');
            var id = $(this).data('id');
            $('.input_player').val(id);
            return false;
        });


        $(document).delegate('.add_player', 'click', function(e) {
            e.preventDefault();
            $('#openModal').removeClass('show');

            var id = 0;
            if ($(this).data('href') == 'modal'){
                id = $('.input_player').val();
            } else {
                id = $('.player_empty').find('.openModal').data('id');
                if (id == undefined) {
                    return 0;
                }
            }

            $('#player_' + id).removeClass('player_empty').addClass('player');

            $('#champion_' + id).find('.add_summoner').hide();
            $('#champion_' + id).find('.loading_box').fadeIn('slow');

            $('#role_' + id).find('.add_summoner').hide();
            $('#role_' + id).find('.loading_box').fadeIn('slow');

            $('#summary_' + id).find('.add_summoner').hide();
            $('#summary_' + id).find('.loading_box').fadeIn('slow');

            $('#ranked_' + id).find('.add_summoner').hide();
            $('#ranked_' + id).find('.loading_box').fadeIn('slow');

            if ($(this).data('href') == 'modal') {
                var data = $( '.form_id' ).serialize();
            } else {
                var data = $( '.form_id_simple' ).serialize();
            }

            var avatar = '';
            var profile = '';
            var profile_header = '';
            var score = '';
            var role_master = '';
            var summary = '';
            var ranked = '';

            $.ajax({
                type: 'POST',
                url: 'api.php?action=getSummoner',
                dataType: 'json',
                data: data,
                success: function(data){
                    if(data.success){
                        avatar = '<h5>' + data.message.player.name + '</h5>' +
                            '<div style="" class="test">' + data.message.score + '<br><span style="font-size: 12px;">Points</span></div>' +
                            '<img width="45" alt="img" src="' + data.message.avatar + '">' +
                            '<div onclick="removeSummoner(' + id + ')" class="circle remove_me">' +
                            '<i class="fa fa-remove fa-1g" style="padding-left:0px;"></i>' +
                            '</div>';


                        profile = '<div class="champion_top">';

                        profile_header = '<div class="player_avatar">' +
                            '<img src="' + data.message.avatar + '" alt="img" width="45" class="avatar"/>' +
                            '<h5>' + data.message.player.name + ' (' + data.message.player.summonerLevel + ') <br> Active Champions: <strong>' + data.message.total + '</strong></h5>' +
                            '</div>';

                        profile += profile_header;

                        var count = 1;
                        var style = '';
                        var chest_icon = '';
                        var grade = '';

                        $.each(data.message.champions, function(i, item) {

                            if(count > 5) {
                                style = 'style="display:none;"';
                            } else {
                                style = '';
                            }

                            if (item.chestGranted) {
                                chest_icon = 'chest_1.png';
                            } else {
                                chest_icon = 'chest_0.png';
                            }

                            if (typeof(item.highestGrade) != "undefined" && item.highestGrade !== null){
                                grade = item.highestGrade;
                            } else {
                                grade = 'N/A';
                            }

                            profile += '<div class="champion_info" ' + style + '>'
                                + '<div class="circle_2" data-value="'+ parseFloat((item.championLevel / 10) * 2) + '">'
                                + '<div class="champion_icon" style="background: url(http://ddragon.leagueoflegends.com/cdn/6.9.1/img/sprite/' + item.championDetail.image.sprite + ' ); background-position: -' + item.championDetail.image.x + 'px -' + item.championDetail.image.y +'px;">'
                                + '<span>Lvl<br>' + item.championLevel + '</span>'
                                + '</div>'
                                + '<img class="getChest" src="image/' + chest_icon + '" alt="Chest" title="Chest"/>'
                                + '</div>'
                                + '<p title="' + item.championDetail.name+' ' + item.championDetail.title + '"> ' + item.championDetail.name + '</p>'
                                + '<p class="red">'
                                + '<small>Champion Points</small>'
                                + '<br>' + item.championPoints +'/' + parseInt(item.championPoints + item.championPointsUntilNextLevel)
                                + '</p>'
                                + '<p class="grey">' + item.lastPlayTime + '</p>'
                                + '<p>Season Highest Grade:<strong>' + grade + '</strong></p>'
                                + '</div>';

                            count++;
                        });

                        if (count > 5) {
                            profile += '<a href="javascript:void(0)" onclick="showAllChampions(this);" class="button">Show All</a>';
                        }
                        profile += '</div>';


                        role_master = '<div class="champion_top">';

                        role_master += '<div class="player_avatar">' +
                            '<img src="' + data.message.avatar + '" alt="img" width="45" class="avatar"/>' +
                            '<h5>' + data.message.player.name + ' (' + data.message.player.summonerLevel + ') <br> Most Played Role: <strong>' + data.message.role_master.best + '</strong></h5>' +
                            '</div>';

                        role_master += '<div style="display:block;">';
                        $.each(data.message.role_master.all, function(i, item) {
                            role_master += '<div class="role_masters ' + i + '">' +
                                '<div class="role_score">' + item + '</div>' +
                                '</div>';

                        });
                        role_master += '</div></div>';

                        summary = '<div class="champion_top">';

                        summary += '<div class="player_avatar">' +
                            '<img src="' + data.message.avatar + '" alt="img" width="45" class="avatar"/>' +
                            '<h5>' + data.message.player.name + ' (' + data.message.player.summonerLevel + ')</h5>' +
                            '</div>';

                        $.each(data.message.summary, function(i, item) {
                            summary += '<div class="champion_info summary">' +
                                '<div class="wins">' + item.wins + ' <small>Wins</small></div>'+
                                '<h3>' + i + '</h3>';

                            if (i == "Classic") {
                                summary += '<p>ChampionKills: ' + item.aggregatedStats.totalChampionKills + '</p>';
                                summary += '<p>MinionKills: ' + item.aggregatedStats.totalMinionKills + '</p>';
                                summary += '<p>TurretsKills: ' + item.aggregatedStats.totalTurretsKilled + '</p>';
                                summary += '<p>NeutralMinionsKilled: ' + item.aggregatedStats.totalNeutralMinionsKilled + '</p>';
                                summary += '<p>Assists: ' + item.aggregatedStats.totalAssists + '</p>';
                            } else if (i == "Aram") {
                                summary += '<p>ChampionKills: ' + item.aggregatedStats.totalChampionKills + '</p>';
                                summary += '<p>TurretsKills: ' + item.aggregatedStats.totalTurretsKilled + '</p>';
                                summary += '<p>Assists: ' + item.aggregatedStats.totalAssists + '</p>';
                            }

                            summary +='</div>';

                        });
                        summary += '</div>';


                        ranked = '<div class="champion_top">';
                        ranked += '<div class="player_avatar">' +
                            '<img src="' + data.message.avatar + '" alt="img" width="45" class="avatar"/>' +
                            '<h5>' + data.message.player.name + ' (' + data.message.player.summonerLevel + ') <br> Active Champions: <strong>' + data.message.total + '</strong></h5>' +
                            '</div>';

                        $.each(data.message.ranked.champions, function(i, item) {
                            ranked += '<div class="champion_info" >'
                                + '<div class="champion_icon_ranked" style="background: url(http://ddragon.leagueoflegends.com/cdn/6.9.1/img/sprite/' + item.championDetail.image.sprite + ' ); background-position: -' + item.championDetail.image.x + 'px -' + item.championDetail.image.y +'px;">'
                                + '<span>' + item.stats.totalSessionsWon +'</span><br><small>Wins</small>'+
                                 '</div>'
                                + '<p class="title" title="' + item.championDetail.name+' ' + item.championDetail.title + '"> ' + item.championDetail.name + '</p>' +
                                '<div class="details">' +
                                '<p>SessionsPlayed: ' + item.stats.totalSessionsPlayed + '</p>' +
                                '<p>SessionsLost: ' + item.stats.totalSessionsLost + '</p>' +
                                '<p>SessionsWon: ' + item.stats.totalSessionsWon + '</p>' +
                                '<p>ChampionKills: ' + item.stats.totalChampionKills + '</p>' +
                                '<p>DoubleKills: ' + item.stats.totalDoubleKills + '</p>' +
                                '<p>TripleKills: ' + item.stats.totalTripleKills + '</p>' +
                                '<p>QuadraKills: ' + item.stats.totalQuadraKills + '</p>' +
                                '<p>PentaKills: ' + item.stats.totalPentaKills + '</p>' +
                                '<p>UnrealKills: ' + item.stats.totalUnrealKills + '</p>' +
                                '<p>DeathsPerSession: ' + item.stats.totalDeathsPerSession + '</p>' +
                                '<p>FirstBlood: ' + item.stats.totalFirstBlood + '</p>' +
                                '<p>Assists: ' + item.stats.totalAssists + '</p>' +
                                '</div>'
                                + '</div>';
                        });
                        ranked += '</div>';

                        $('#player_' + id).html(avatar);
                        $('#champion_' + id).addClass('col_player').html(profile);
                        $('#role_' + id).addClass('col_player').html(role_master);
                        $('#summary_' + id).addClass('col_player').html(summary);
                        $('#ranked_' + id).addClass('col_player').html(ranked);

                        $('#champion_' + id + ' .circle_2').circleProgress({
                            size: 60,
                            thickness: 6,
                            lineCap: 'round',
                            emptyFill: 'rgba(255, 255, 255, 1)',
                            fill: {color: '#ed1438'},
                            startAngle: 4.7
                        });
                    }else{

                        $('#player_' + id).addClass('player_empty').removeClass('player');
                        var champion = '<div class="empty_col">' +
                            '<i class="fa fa-user fa-2x"></i>' +
                            '</div>' +
                            '<div class="champion_empty">' +
                            '<div class="add_summoner">' +
                            '<p style="margin-bottom:10px;margin-top:35px;text-align:center;">An error occurred.<br> ' + data.message + '</p>' +
                            '<h3 style="padding-top:10px;">Add Summoner to see</h3>' +
                            '<h3>their champions</h3>' +
                            '<a data-id="2" href="" class="openModal">' +
                            '<i class="fa fa-plus fa-3x"></i>' +
                            '</a>' +
                            '</div>' +
                            '<div style="display: none;" class="loading_box">' +
                            '<h3 style="padding-top:40px;">Loading . . . </h3>' +
                            '<div class="cssload-loader"></div>' +
                            '</div>' +
                            '</div>';

                        var role_master = '<div class="empty_col">' +
                            '<i class="fa fa-user fa-2x"></i>' +
                            '</div>' +
                            '<div class="champion_empty">' +
                            '<div class="add_summoner">' +
                            '<p style="margin-bottom:10px;margin-top:35px;text-align:center;">An error occurred.<br> ' + data.message + '</p>' +
                            '<h3 style="padding-top:10px;">Add Summoner to see</h3>' +
                            '<h3>their most played role</h3>' +
                            '<a data-id="2" href="" class="openModal">' +
                            '<i class="fa fa-plus fa-3x"></i>' +
                            '</a>' +
                            '</div>' +
                            '<div style="display: none;" class="loading_box">' +
                            '<h3 style="padding-top:40px;">Loading . . . </h3>' +
                            '<div class="cssload-loader"></div>' +
                            '</div>' +
                            '</div>';

                        var summary = '<div class="empty_col">' +
                            '<i class="fa fa-user fa-2x"></i>' +
                            '</div>' +
                            '<div class="champion_empty">' +
                            '<div class="add_summoner">' +
                            '<p style="margin-bottom:10px;margin-top:35px;text-align:center;">An error occurred.<br> ' + data.message + '</p>' +
                            '<h3 style="padding-top:10px;">Add Summoner to see</h3>' +
                            '<h3>their summary</h3>' +
                            '<a data-id="2" href="" class="openModal">' +
                            '<i class="fa fa-plus fa-3x"></i>' +
                            '</a>' +
                            '</div>' +
                            '<div style="display: none;" class="loading_box">' +
                            '<h3 style="padding-top:40px;">Loading . . . </h3>' +
                            '<div class="cssload-loader"></div>' +
                            '</div>' +
                            '</div>';

                        var ranked = '<div class="empty_col">' +
                            '<i class="fa fa-user fa-2x"></i>' +
                            '</div>' +
                            '<div class="champion_empty">' +
                            '<div class="add_summoner">' +
                            '<p style="margin-bottom:10px;margin-top:35px;text-align:center;">An error occurred.<br> ' + data.message + '</p>' +
                            '<h3 style="padding-top:10px;">Add Summoner to see</h3>' +
                            '<h3>their ranked stats</h3>' +
                            '<a data-id="2" href="" class="openModal">' +
                            '<i class="fa fa-plus fa-3x"></i>' +
                            '</a>' +
                            '</div>' +
                            '<div style="display: none;" class="loading_box">' +
                            '<h3 style="padding-top:40px;">Loading . . . </h3>' +
                            '<div class="cssload-loader"></div>' +
                            '</div>' +
                            '</div>';

                        $('#champion_' + id).html(champion);
                        $('#role_' + id).html(role_master);
                        $('#summary_' + id).html(summary);
                        $('#ranked_' + id).html(ranked);
                    }
                }
            });


            return false;
        });

    });

    function showAllChampions(obj)
    {
        $(obj).parent().children().fadeIn("slow");
        $(obj).remove();
    }

    function removeSummoner(id)
    {
        var player = '<a data-id="'+id+'" href="" class="openModal">' +
            '<div class="empty">' +
            '<i class="fa fa-user fa-2x"></i>' +
            '</div>' +
            '<div class="circle">' +
            '<i class="fa fa-plus fa-1g"></i>' +
            '</div>' +
            '</a>' +
            '<div class="test" style="">0<br><span style="font-size: 12px;">Points</span></div>';

        var champion = '<div class="empty_col">' +
            '<i class="fa fa-user fa-2x"></i>' +
            '</div>' +
            '<div class="champion_empty">' +
            '<div class="add_summoner">' +
            '<h3 style="padding-top:40px;">Add Summoner to see</h3>' +
            '<h3>their champions</h3>' +
            '<a data-id="'+id+'" href="#openModal" class="openModal">' +
            '<i class="fa fa-plus fa-3x"></i>' +
            '</a>' +
            '</div>' +
            '<div style="display: none;" class="loading_box">' +
            '<h3 style="padding-top:40px;">Loading . . . </h3>' +
            '<div class="cssload-loader"></div>' +
            '</div>' +
            '</div>';

        var role_master = '<div class="empty_col">' +
            '<i class="fa fa-user fa-2x"></i>' +
            '</div>' +
            '<div class="champion_empty">' +
            '<div class="add_summoner">' +
            '<h3 style="padding-top:40px;">Add Summoner to see</h3>' +
            '<h3>their most played role</h3>' +
            '<a data-id="'+id+'" href="#openModal" class="openModal">' +
            '<i class="fa fa-plus fa-3x"></i>' +
            '</a>' +
            '</div>' +
            '<div style="display: none;" class="loading_box">' +
            '<h3 style="padding-top:40px;">Loading . . . </h3>' +
            '<div class="cssload-loader"></div>' +
            '</div>' +
            '</div>';

        var summary = '<div class="empty_col">' +
            '<i class="fa fa-user fa-2x"></i>' +
            '</div>' +
            '<div class="champion_empty">' +
            '<div class="add_summoner">' +
            '<h3 style="padding-top:40px;">Add Summoner to see</h3>' +
            '<h3>their summary</h3>' +
            '<a data-id="'+id+'" href="#openModal" class="openModal">' +
            '<i class="fa fa-plus fa-3x"></i>' +
            '</a>' +
            '</div>' +
            '<div style="display: none;" class="loading_box">' +
            '<h3 style="padding-top:40px;">Loading . . . </h3>' +
            '<div class="cssload-loader"></div>' +
            '</div>' +
            '</div>';

        var ranked = '<div class="empty_col">' +
            '<i class="fa fa-user fa-2x"></i>' +
            '</div>' +
            '<div class="champion_empty">' +
            '<div class="add_summoner">' +
            '<h3 style="padding-top:40px;">Add Summoner to see</h3>' +
            '<h3>their ranked stats</h3>' +
            '<a data-id="'+id+'" href="#openModal" class="openModal">' +
            '<i class="fa fa-plus fa-3x"></i>' +
            '</a>' +
            '</div>' +
            '<div style="display: none;" class="loading_box">' +
            '<h3 style="padding-top:40px;">Loading . . . </h3>' +
            '<div class="cssload-loader"></div>' +
            '</div>' +
            '</div>';


        $('#player_' + id).removeClass('player').addClass('player_empty').html(player);
        $('#champion_' + id).removeClass('col_player').fadeIn("slow").html(champion).hide().fadeIn("slow");
        $('#role_' + id).removeClass('col_player').fadeIn("slow").html(role_master).hide().fadeIn("slow");
        $('#summary_' + id).removeClass('col_player').fadeIn("slow").html(summary).hide().fadeIn("slow");
        $('#ranked_' + id).removeClass('col_player').fadeIn("slow").html(ranked).hide().fadeIn("slow");

    }

</script>
</body>
</html>