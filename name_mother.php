<html>
	<head>
		<link rel="stylesheet" type="text/css" href="practice130308.css">
	</head>
	<div id="spiral-obj-container">
	<div id="block-header">The Giving Mother</div>
	<body>
	
	<?php
	if (isset($_POST['name']) && isset($_POST['mother']))
	{
	$name=($_POST['name']);
	$mother=($_POST['mother']);
	}
	else {
		echo "Please enter your name and your mother's name";
		break;
	}
	?>	
		
	<script language="javascript" type="text/javascript">
	var story="<br/>Once there was a tree...and she loved a child. And every day the boy would come and they would gather her leaves and make them into crowns and play king of the forest. They would climb up her trunk and swing from her branches and eat apples. And they would paly hide-and-go-seek. And when they were tired, they would sleep in her shade. And the boy loved the tree....very much. And the tree was happy.<br/><br/>But time went by. And the boy grew older. And the tree was often alone. Then one day the boy came to the tree and the tree said, Come, Boy, come and climb up my truck and swing from my branches and eat apples and play in my shade and be happy. I am too big to climb and play, said the boy. I want to buy things and have fun. I want some money. Can you give me some money?<br/><br/>Im sorry, said the tree, but i have no money, I have only leaves and apples. Take my apples, Boy, and sell them in the city. then you will have money and you will be happy. And so the boy climbed up the tree and gather her apples and carried them away. And the tree was happy.<br/><br/>But the boy stayed away for a long time...and the tree was sad. And then one day the boy came back and the tree shook with joy and she said, Come, Boy, climb up my trunk and swing from my branches and be happy. <br/><br/>I am too busy to climb trees, said the boy. I want a house to keep me warm. I want a wife and I want children, and so I need a house. Can you give me a house?<br/><br/>I have no house, said the tree. the forest is my house, but you may cut off my branches and build a house. Then you will be happy. And the boy cut off her branches and carried them away to build his house. And the tree was happy. <br/><br/>But the boy stayed away for a long time. and when he came back, the tree was so happy she could hardly speak. Come, Boy, she whispered, come and play.<br/><br/>I am too old and sad to play, said the boy. I want a boat that can take me far away from here. Can you give me a boat? <br/><br/>Cut down my trunk and make a boat, said the tree. Then you can sail away....and be happy. And so the boy cut down her trunk and made a boat and sailed away. And the tree was happy....but not really. And after a long time the boy came back again. <br/><br/>I am sorry, Boy, said the tree, but i have nothing left to give you. My apples are gone.<br/><br/>My teeth are too weak for apples, said the boy.<br/><br/>My branches are gone, said the tree. You cannot swing on them. <br/><br/>I am too old to swing on branches, said the boy. <br/><br/>My trunk is gone, said the tree. You cannot climb.<br/><br/>I am too tired to climb, said the boy.<br/><br/>I am sorry, sighed the tree. I wish that i could give you something------but I have nothing left. I am just an old stump.<br/><br/>I dont need very much now, said the boy. Just a quiet place to sit and rest. I am very tired.<br/><br/>Well, said the tree, straightening herself up as much as she could, Well, an old stump is good for sitting and resting. Come, Boy, sit down. Sit down and rest. And the boy did. And the tree was happy."
    var name = "<?php echo $name ?>";
    var mother = "<?php echo $mother ?>";
    var story2=story.replace(/the boy/g, name);
    var story3=story2.replace(/Boy/g, name);
    var story4=story3.replace(/the tree/g, mother);
    document.write(story4);
	</script>
</body>
</div>
	
	
</html>
