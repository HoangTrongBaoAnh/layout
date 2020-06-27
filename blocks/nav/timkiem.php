<?php
include('../../lib/DataProvider.php');
include('../../lib/quantri.php');
$s1=$_REQUEST["n"];
$select_query="select * from game where tengame like '%".$s1."%'";
$sql=DataProvider::ExecuteQuery($select_query);

$s="";
while($row=mysqli_fetch_array($sql))
{
	$hinh=getThumbnailGame($row['idgame']);
	$rowhinh=mysqli_fetch_array($hinh);
	$s=$s."
	<div>
	<a class='link-p-colr' href='gameDetail.php?idgame=".$row['idgame']."'>
		<div class='live-outer'>
				
				<div class='live-product-det'>
					<div class='live-im'>
						<img src='image/hình/".$rowhinh['tenhinh']."'/>
					</div>
                	<div class='live-product-name'>
                    	<p>".$row['tengame']."</p>
                    </div>
                    <div class='live-product-price'>
						<div class='live-product-price-text'><p>".number_format($row['giatien'])."</p></div>
                    </div>
                </div>
            </div>
	</a>
	</div>
	"	;
}
echo $s;
?>