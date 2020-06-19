<!doctype html>
<html lang="en">

<head>
    <title>Connexion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=BASE_ROOT?>/assets/css/classe.css">


</head>

<body>

    <header class="bgSecondary">
        <h1 class="text-center m-0">
            Le plaisir de jouer
        </h1>
    </header>

    <div id="main" class="d-flex justify-content-center align-items-center">
     
        <?php echo $content_for_layout;?>
        
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
       <script src="<?=BASE_ROOT?>assets/js/script.js"></script>
</body>


<script>
$(function(){
   
    $("#connexion-form-1").on("submit",function(event){
        alert("ok")
        event.preventDefault();
            $form=$("#connexion-form-1")
            url = $form.attr("action" );
            alert(url);
            $.post(url,$form.serialize(),
               function(data, status){
                    console.log(data);
              });  
    });

    $("#btn_inscription").on("click",function(event){
        const url=$(this).attr("lien")
          $("#main").load(url);
    });
    

    
});


</script>
</html>