<!-- <script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">健康新知</li>
    <li class="TabbedPanelsTab" tabindex="0">菸害防治</li>
    <li class="TabbedPanelsTab" tabindex="0">癌症防治</li>
<li class="TabbedPanelsTab" tabindex="0">慢性病防治<br />
</li>
</ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">內容 1</div>
    <div class="TabbedPanelsContent">內容 2</div>
    <div class="TabbedPanelsContent">內容 3</div>
<div class="TabbedPanelsContent">內容 4</div>
</div>
</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script> -->
<style>
.nav{
  cursor:pointer;
  color:blue;
  margin:10px 0;
}
.nav:hover{
  text-decoration:underline;
}
</style>
<div>目前位置: 首頁 > 分類網誌 > <span id='nav'></span></div>
<fieldset style="display:inline-block;vertical-align:top">
  <legend>分類網誌</legend>
    <div id="t1" onclick="nav(this)" class="nav">健康新知</div>
    <div id="t2" onclick="nav(this)" class="nav">菸害防治</div>
    <div id="t3" onclick="nav(this)" class="nav">癌症防治</div>
    <div id="t4" onclick="nav(this)" class="nav">慢性病防治</div>
</fieldset>

<fieldset style="display:inline-block">
  <legend>文章列表</legend>
  <div class="titles"></div>
</fieldset>

<script>
$("#nav").text($("#t1").text());

function nav(type){
  let str=$(type).text()
  // console.log(str)
  $("#nav").text(str);
  let t=$(type).attr('id').replace("t","");
  getTitle(t)
}
function getTitle(type){
$.get("api/get_titles.php",{type},function(titles){
  $("#titles").html(titles)
})

}
</script>