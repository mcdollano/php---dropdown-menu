<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="main-container">
		<?php
			$items = [
				[
				'name' => 'kobe1',
				 'price' => 'Php3000',
				 'description' => 'lorem ipsum',
				 'img' => 'canvas.png',
				 'category' => 'KOBE AD'

				], 

				[
				'name' => 'kobe2',
				 'price' => 'Php3500',
				 'description' => 'lorem ipsum dolor',
				 'img' => 'kobe1.png',
				 'category' => 'KOBE LOW'
				],

				[
				'name' => 'kobe3',
				 'price' => 'Php4000',
				 'description' => 'lorem ipsum dolor amet',
				 'img' => 'kobe-master.png',
				 'category' => 'KOBE HIGH'
				]
			];

			 foreach ($items as $item) {

			 	if(!isset($_POST['submit']) || $_POST['category'] == $item['category'] || $_POST['category'] == 'ALL')
			 	{
				 	echo "<img src =" . $item['img'] . ">" . "<br>";
					echo $item['name'] . "<br>";
					echo $item['price'] . "<br>";
					echo $item['description'] . "<br>";					
				}
			}

			function create_dropdown($name,$options){
				$output = "<select name = '$name'>";
				$output .= "<option> ALL</option>";
				foreach ($options as $value) {
					if(isset($_POST[$name]) && $_POST[$name] == $value){
						$output .= "<option selected value = '$value' > $value </option>";
					} else {
						$output .= "<option value='$value'>$value</option>";
					}
				}
				$output .= "</select>";
			
				return $output;
			}

			$category = array_column($items, 'category');
			$category = array_unique($category);
			echo "<form method='POST' action=''>";
			echo create_dropdown('category',$category);
			echo "<input type='submit' name='submit' value='Search'></form>";
		?>


	</div>



</body>
</html>