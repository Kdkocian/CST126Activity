<?php
    require_once 'myfuncs.php';
    $db = new myfuncs();
    $posts = $db->getAllPosts();
?>

<html>
    <head>
    	<title>Posts</title>
	</head>
    <body>
        <?php
        if(!$db->getUseradmin())
        {
            if(count($posts)!=0)
            {       
                for($i=0; $i < count($posts); $i++)
                {
                    
                    echo "<a href='view_post.php?pid=".$posts[$i][0]."'>".$posts[$i][2]."</a><br/>";
                    echo "<p>".$posts[$i][3]."</p><br/>";
                    $postcomments = $db->getALLComments($posts[$i][0]);
                    for($j = 0; $j < count($postcomments); $j++)
                    {
                        echo "<p>comment: ".$postcomments[$j]."</p>";
                    }
                    echo "<a href='editPost.php?pid=".$posts[$i][0]."&title=".$posts[$i][2]."&content=".$posts[$i][3]."'>Edit </a>";
                    echo "<a href='comment.php?pid=".$posts[$i][0]."'>Comment </a><br/>";
                } 
            }
            else 
            {
                echo "There are no posts to display!";
            }
        }
        else 
        {
            if(count($posts)!=0)
            {
                for($i=0; $i < count($posts); $i++)
                {
                    echo "<a href='view_post.php?pid=".$posts[$i][0]."'>".$posts[$i][2]."</a><br/>";
                    echo "<p>".$posts[$i][3]."</p><br/>";
                    
                    $postcomments = $db->getALLComments($posts[$i][0]);
                    for($j = 0; $j < count($postcomments); $j++)
                    {
                        echo "<p>comment: ".$postcomments[$j]."</p>";
                    }
                    
                    echo "<a href='postManagement.php?pid=".$posts[$i][0]."&Delete=\"Delete\"'>Delete </a>";
                    echo "<a href='adminManagement.php?pid=".$posts[$i][0]."'>Management </a>";
                    echo "<a href='comment.php?pid=".$posts[$i][0]."'>Comment</a><br/>";
                }
            } 
            else 
            {
                echo "There are no posts to display!";
            }
        }
       
        ?>
    </body>
</html>

