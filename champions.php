<!DOCTYPE html>
<html>
<head>
    <title>Champion Mastery Api Challenge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/circle-progress.js"></script>
	<script src="https://npmcdn.com/isotope-layout@3.0/dist/isotope.pkgd.min.js"></script>
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

	<div class="champ_info">
		<h1> Champion Information </h1>
			<div class="options">
			
						<div id="openModal" class="modalInformation">
                        </div>	
						<div id="openModal2" class="modalInformation2">
						<div>
							<div class="loading_box">
                                    <h3 style="padding-top:40px;">Loading . . . </h3>
                                    <div class="cssload-loader"></div>
                                </div>
								</div>
                        </div>
			
				<div class="filter">

					<ul>
						<li><a href="#" data-filter="*" class="current" style="padding:0px 20px;">All</a></li>
						<li><a href="#" data-filter=".Support"><img src="image/support.png" />Support</a></li>
						<li><a href="#" data-filter=".Assassin"><img src="image/assassin.png" />Assassin</a></li>
						<li><a href="#" data-filter=".Tank"><img src="image/tank.png" />Tank</a></li>
						<li><a href="#" data-filter=".Fighter"><img src="image/fighter.png" />Fighter</a></li>
						<li><a href="#" data-filter=".Mage"><img src="image/mage.png" />Mage</a></li>
						<li><a href="#" data-filter=".Marksman"><img src="image/marksman.png" />Marksman</a></li>
					</ul>
				</div>
				<div class="content">
	
			

				
			<?php 
				require_once 'include/Api.php';
				$api = new Api();
				$all_champions = $api->getAllChampions(); 
				//echo '<pre>';
				
				//print_r($all_champions['data']);
				//echo '</pre>';
				
				$ico = '';
				$style='';
				ksort($all_champions['data']);
				
				foreach ($all_champions['data'] as $champion){
					
					$ico = implode(' ',$champion['tags']);
					$count =count($champion['tags']);
					if($count == 1 ){
						$style='style="margin-left:40px;"';
					}else{
						$style='';
					}
			
					
				?>	
				
					<div class="box_champion <?php echo $ico?>" data-id="<?php echo $champion['id'] ?>"> 
						<div class="ico <?php echo $champion['tags'][0];?>" <?php echo $style;?>></div>
						<?php if($count >= 2 ){?><div class="ico <?php echo $champion['tags'][1];?>"></div><?php } ?>
						<div class="image_champ">
						<img src="http://ddragon.leagueoflegends.com/cdn/6.9.1/img/champion/<?php echo $champion['key'] ?>.png" />
						</div>
						<h4><?php echo $champion['name']; ?></h4>
					</div>
			<?php
					
					
				}
				?>
		
				

				
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
<script type="application/javascript">

    $(function(){
		$(document).delegate('#closeModal','click', function(e) {
            $('#openModal').removeClass('show');

        });

        $(document).delegate('.box_champion','click', function(e) {
			e.preventDefault();
			$('#openModal2').addClass('show');
            var id = $(this).data('id');
			var output = '';
			var spells = '';
			var spells_desc = '';
			var class_ac='';
		 $.ajax({
                type: 'POST',
                url: 'api.php?action=getChampion',
                dataType: 'json',
                data: {id:id},
                success: function(data){
                    if(data.success){
						if(typeof(data.message.champion.tags[1]) != "undefined" && data.message.champion.tags[1] !== null){
							tag2 = data.message.champion.tags[1];
						}else{
							tag2 = 'N/A';
						}
                       output = '<div id="main_modal" style="background-image: url(\'http://ddragon.leagueoflegends.com/cdn/img/champion/splash/'+data.message.champion.key+'_0.jpg\');">'+
                                '<a id="closeModal" href="javascript:void(0)" title="Close" class="close">X</a>'+
                            
								'<div class="leftModal"> '+
								'<h2>'+ data.message.champion.name +'<span> '+ data.message.champion.title +'</span></h2>'+
								'<div class="attributes">'+
									'<div class="box_scroll">'+
									'<h4> '+ data.message.champion.tags[0] +' </h4>'+
									'<h4> Secondary: '+ tag2 +' </h4>'+
									'<p>  '+ data.message.champion.lore +' </p>'+
									'</div>'+
								'</div>'+
								'<div class="spells">';
								
								spells += '<div class="spell active" data-href="6" style="background: url(\'http://ddragon.leagueoflegends.com/cdn/6.9.1/img/sprite/'+data.message.champion.passive.image.sprite+'\');background-position: -'+data.message.champion.passive.image.x+'px -'+data.message.champion.passive.image.y+'px;"></div>';
								
								spells_desc +='<div class="spell_desc" id="desc_6">'+
										'<h3>'+data.message.champion.passive.name+'</h3>'+
										'<p>'+data.message.champion.passive.description+'</p>'+
									'</div>';
								
								 $.each(data.message.champion.spells, function(i, item) {

									spells += '<div class="spell" data-href="'+i+'" style="background: url(\'http://ddragon.leagueoflegends.com/cdn/6.9.1/img/sprite/'+item.image.sprite+'\');background-position: -'+item.image.x+'px -'+item.image.y+'px;"></div>';
								
								 
								 spells_desc +='<div class="spell_desc" id="desc_'+i+'" style="display:none">'+
										'<h3>'+item.name+'</h3>'+
										'<p>'+item.description+'</p>'+
									'</div>';
								 });
								output += spells + spells_desc; 
								output +='</div>'+ 
									'</div>'+
									'<div class="centerModal">'+
									'<div class="stats">'+
									'<div class="stats_bar" style="width:'+data.message.champion.info['attack']+'0%;"><h6>Attack</h6></div>'+
										'<div class="stats_bar" style="width:'+data.message.champion.info['defense']+'0%;"><h6>Defense<h6></div>'+
										'<div class="stats_bar" style="width:'+data.message.champion.info['magic']+'0%;"><h6>Magic<h6></div>'+
										'<div class="stats_bar" style="width:'+data.message.champion.info['difficulty']+'0%;"><h6>Difficulty<h6></div>'+
									'</div>'+
								'</div>'+							
								'<div class="rightModal">';
							 $.each(data.message.champion.skins, function(i, item) {
								 if(i == 0){
									 class_ac = 'active';
								 }else{
									  class_ac = '';
								 }
									output += '<div class="skin '+ class_ac +'" style="background-image: url(\'http://ddragon.leagueoflegends.com/cdn/img/champion/splash/'+data.message.champion.key+'_'+item.num+'.jpg\');background-size:cover;" title="'+item.name+'"></div>';
							 }); 
								output += '</div>'+
								'</div>'; 
					   $('#openModal').html(output);
					   $('#openModal2').removeClass('show');
					   $('#openModal').addClass('show');
                    }else{
                       $('#openModal2').removeClass('show');
                    }
                }
            });

		
            return false;
        });      

		$(document).delegate('.spell','click', function(e) {
			e.preventDefault();
			var id = $(this).data('href');
			$('.spell_desc').hide();
			$('#desc_'+id).fadeIn('slow');
			$('.spell').removeClass('active');
            $(this).addClass('active');
           
         
            return false;
        });		
		
		$(document).delegate('.skin','click', function(e) {
			e.preventDefault();
			var style = $(this).attr('style');
			console.log(style);
			$('#main_modal').attr('style',style);
			$('.skin').removeClass('active');
            $(this).addClass('active');
            return false;
        });
		
	});
	$(window).load(function(){

    var $container = $('.content');
		$container.isotope({
        filter: '*',
		gutter: 10,
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
		
    });


   $('.filter a').on('click',function(){
       $('.champ_info .current').removeClass('current');
       $(this).addClass('current');
		
        var selector = $(this).attr('data-filter');
        $container.isotope({
           filter: selector,
		   
		   gutter: 10,
           animationOptions: {
              duration: 750,
               easing: 'linear',
               queue: false
           }
        });
        return false;
    }); 
	});
</script

</body>

</html>