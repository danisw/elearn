<head>
<!--	<script type="text/javascript">
            var game = new Phaser.Game(650, 600, Phaser.AUTO, 'phaser', {preload: preload, create: create, update: update});
            var kemoceng;
            var penyuh;

            function preload() {
              //this.game.load.atlasJSONHash('mysprite', '<?=base_url()?>assets/shark/shark.png', '<?=base_url()?>assets/shark/shark.json');
              //this.game.load.atlasJSONHash('mysprite', '<?=base_url()?>assets/shark/penyu.png', '<?=base_url()?>assets/shark/penyu.json');
              //this.game.load.atlasJSONHash('mysprite', '<?=base_url()?>assets/kemoceng.png', '<?=base_url()?>assets/kemoceng.json');
              this.game.load.atlasJSONHash('mysprite2', '<?=base_url()?>assets/hitungkemoceng.png', '<?=base_url()?>assets/hitungkemoceng.json');
                //game.load.image('penyuh', '<?=base_url()?>assets/penyuh.png');
                // game.load.image('katak2', '<?=base_url()?>assets/s2.gif');
                //load the json from TexturePacker
    // game.load.atlasJSONHash('max', 'max.png', 'max.json');

            game.load.image('undersea', '<?=base_url()?>assets/shark/underse.jpg');
             }

            function create() {
               game.add.image(0, 0, 'undersea');
               // penyuh = game.add.sprite(0, -50, 'mysprite','kemoceng1');
               // penyuh.animations.add('renang',['kemoceng1','kemoceng2','kemoceng3','kemoceng4','kemoceng5','kemoceng6','kemoceng7','kemoceng8','kemoceng9'], 1, true,false);
               // penyuh.animations.play('renang');

                kemoceng= game.add.sprite(0, -50, 'mysprite2','kemoceng10');
               kemoceng.animations.add('hitung',['kemoceng10','kemoceng11','kemoceng12','kemoceng13','kemoceng14','kemoceng15','kemoceng16','kemoceng17','kemoceng18','kemoceng19','kemoceng20','kemoceng21'], 1, true,false);
               kemoceng.animations.play('hitung');
                //penyuh.animations.add('swim', Phaser.Animation.generateFrameNames('penyu', 1, 6, '', 4), 30, true);
              // penyuh.animations.play('swim');

            	// game.stage.backgroundColor = '#1873CE';
              //  shark = game.add.sprite(0, 180, 'mysprite', 'penyu1.png');
              //  shark.animations.add('renang',['penyu1.png','penyu2.png','penyu3.png','penyu4.png','penyu5.png','penyu6.png'], 1, true,false);
              //  shark.animations.play('renang');
               // penyuh = this.add.sprite(0, 50, 'penyuh');
               // katak2=this.add.sprite(50, 0, 'katak2');
               // this.add.tween(katak).to({x: 500}, 0, Phaser.Easing.Exponential.Out, true); //Kode animasi
               // katak.animation.add('jump');
               // katak.animation.play('jump',30,true);
               // game.add.tween(shark).to({ x: 200 }, 2000, Phaser.Easing.Quadratic.InOut, true, 0, 1000, true);
                //game.add.tween(penyuh).to({ y: 300 }, 3000, Phaser.Easing.Quadratic.InOut, true, 0,1000, true);
            }

            function update() {
            }

        </script>
        <script>
		function play(){
      responsiveVoice.speak( "Ayo Kita Menghitung Kemoceng.
      Ada berapa kemoceng disamping? kemoceng disamping ada 9","Indonesian Female",
      {

          pitch:1,
          rate:0.5,
          volume: 4
        }

        );
    }
    function stop(){
      responsiveVoice.cancel();
    }
    function pause(){
      responsiveVoice.pause();
    }
    function resume(){
      responsiveVoice.resume();
    }

 // $(function () {
    
</script> -->
</head>
<div class="row" style="background-color: white; margin-top: -30px; size: 20px;">

<div class="col-md-7">
	<div id="phaser">
   <!--marquee behaviour="alternate" width="200px">--> 
                  <object width="1366" height="500" data="<?=base_url()?>assets/flash/tema6.swf"></object>
                  
                  <!--/marquee--> 
  </div>
</div>

</div>