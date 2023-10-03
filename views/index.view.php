<?php require "views/partials/header.php"; ?>

<h1 class="text-center">  PHP Learning </h1>
<ul>
<?php foreach ($tasks as $key => $task): ?>
    <li>
        <?php
            if($task->complete){
                echo "<strike class='text-success'>$task->description</strike>";
            }else{
                echo "<em>$task->description</em>";
            }
         ?>
    </li>
    
<?php endforeach; ?>
</ul>
<ul>
    <?php foreach ($users as $key => $user): ?>
        <li>
           Name : <?= $user->name;?>, Email : <?= $user->email;?>, Phone : <?= $user->phone;?>
        </li>
        
    <?php endforeach; ?>
</ul>

<?php 
class Post{
    public $postTitle;
    public $postPublish;
    public function __construct($postTitle,$postPublish)
    {
        $this->title = $postTitle;
        $this->publish = $postPublish;
    }
}
$posts = [
    new Post("post 1",true),
    new Post("post 2",false),
    new Post("post 3",true),
    new Post("post 4",true),
];

$postUnPublish = array_filter($posts,function($post){
    return !$post->publish;
});
echo "<pre>";
var_dump($postUnPublish);


$titles = array_map(function($post){
    return $post->title;
},$posts);

echo "<pre>";
var_dump($titles);
?>

<?php require "views/partials/footer.php"; ?>