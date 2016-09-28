<?php
$this->registerJsFile('http://api.map.baidu.com/api?v=2.0&ak=EFCchtMph9fOGGbGkPWvEvvM');

$js = <<<JS
 //创建和初始化地图函数：
    function initMap(){
      createMap();//创建地图
      setMapEvent();//设置地图事件
      addMapControl();//向地图添加控件
      addMapOverlay();//向地图添加覆盖物
    }
    function createMap(){ 
      map = new BMap.Map("map"); 
      map.centerAndZoom(new BMap.Point(120.380799,30.235791),17);
    }
    function setMapEvent(){
      map.enableScrollWheelZoom();
      map.enableKeyboard();
      map.enableDragging();
      map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
      target.addEventListener("click",function(){
        target.openInfoWindow(window);
      });
    }
    function addMapOverlay(){
      var markers = [
        {content:"电话：+86 0571 8369 5216 </br>传真：+86 0571 8369 5836 </br>电邮：info@wheeler-us.com </br>地址：中国杭州萧山红垦路33号",title:"蕙勒 wheeler",imageOffset: {width:0,height:3},position:{lat:30.235089,lng:120.380045}}
      ];
      for(var index = 0; index < markers.length; index++ ){
        var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
        var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
          imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
        })});
        var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(18,5)});
        var opts = {
          width: 200,
          title: markers[index].title,
          enableMessage: false
        };
        var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
        marker.setLabel(label);
        addClickHandler(marker,infoWindow);
        map.addOverlay(marker);
      };
    }
    //向地图添加控件
    function addMapControl(){
      var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
      scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
      map.addControl(scaleControl);
      var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
      map.addControl(navControl);
      var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
      map.addControl(overviewControl);
    }
    var map;
      initMap();

    var mapWidth = $("#map").width();
    $("#map").height(mapWidth * 0.8);
JS;

$this->registerJS($js);
?>
	
	<div class="col-md-6">
		<!--百度地图容器-->
    	<div id="map"></div>
	</div>

	<div class="col-md-6">
	<br>
		<p>
			<?= $contact['p']?>
		</p>
		<table class="table table-bordered">
		  <caption>
		  		<?= $contact['caption']?>
		  </caption>
		  <thead>
		    <tr>
		    </tr>
		  </thead>
		  <tbody>
		    <?php foreach($contact['items'] as $c):?>
		    	<tr>
		    		<td class="text-right"><?= $c['label']?></td>
		    		<td><?= $c['name'];?></td>
		    	</tr>
		    <?php endforeach;?>
		  </tbody>
		</table>

	</div>