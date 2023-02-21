<?php
$title = 'Contact';
require_once 'template/header.php';

function filterString($field){
    $field = filter_var(trim($field), filter: FILTER_SANITIZE_STRING);
    if (embty($field)){
        return false;
    } else{
        return $field;

    }

}
function filterEmail($field){
    $field = filter_var(trim($field), filter: FILTER_SANITIZE_EMAIL);
    if(filter_var($field, filter: FILTER_SANITIZE_EMAIL){
        return $field;

    }
    else{
        return false;
    }
  

}

$nameError = $emailError = $documentError = $messageError ='';


if( $_SERVER ['REQUEST_METHOD'] == 'POST'){
    if( isset($_FILES['document']) && $_FILES['document']['error'] ==0){
        $allowed = [
            'jpg' =>'image/jpeg',
            'png' =>'image/png',
            'gif' =>'image/gif'

        ];
    }
}
?>

<h1> Contact Us</h1>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name" >your name</label>
        <input type="text" name="name" value="<?php echo $name?>" class="form-control" placeholder="your name">
        <span class="text-danger"><?php echo $nameError ?></span>
    </div>
    <div class="form-group">
        <label for="email" >your email</label>
        <input type="text" name="email" value="<?php echo $email?> class="form-control" placeholder="your email">
        <span class="text-danger"><?php echo $emailError ?></span>
    </div>
    <div class="form-group">
        <label for="document">your document</label>
        <input type="file" name="document" class="form-control" placeholder="your document">
        <span class="text-danger"><?php echo $documentError ?></span>
    </div>
    <div class="form-group">
        <label for="message" >your message</label>
        <textarea  name="message"  value="<?php echo $message?> class="form-control" placeholder="your message"> </textarea>
        <span class="text-danger"><?php echo $messageError ?></span>
    </div>
    <button class="btn btn-primary">send</button>
</form>
<?php require_once 'template/footer.php'?>