<?php require "views/partials/header.php"; ?>

<h1 class="text-center">  PHP Learning </h1>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <?php //dd($users); ?>
            <ul>
                <?php foreach ($users as $key => $user):?>
                    <li>
                        <?php echo "Name :  $user->name, Mail : $user->email, Phone : $user->phone";?>
                    </li>
                <?php endforeach; ?>
            </ul>

            <ul>
                <?php foreach ($tasks as $key => $task):?>
                    <li>
                        <?php echo "Name :  $task->description, $task->complete";?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="col-md-6">
            <div class="card card-body shado">
                <form action="/name" method="POST">
                    <div class="form-group">
                        <input type="text" name="txtname" placeholder="Enter your name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="email" name="txtemail" placeholder="Enter your email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="txtphone" placeholder="Enter your Phone" id="phone" class="form-control">
                    </div>
                    <input type="submit" value="Submit" class="btn btn-dark">
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
// class Post{
//     public $postTitle;
//     public $postPublish;
//     public function __construct($postTitle,$postPublish)
//     {
//         $this->title = $postTitle;
//         $this->publish = $postPublish;
//     }
// }
// $posts = [
//     new Post("post 1",true),
//     new Post("post 2",false),
//     new Post("post 3",true),
//     new Post("post 4",true),
// ];

// $postUnPublish = array_filter($posts,function($post){
//     return !$post->publish;
// });
// echo "<pre>";
// var_dump($postUnPublish);


// $titles = array_map(function($post){
//     return $post->title;
// },$posts);

// echo "<pre>";
// var_dump($titles);
?>

<?php require "views/partials/footer.php"; ?>