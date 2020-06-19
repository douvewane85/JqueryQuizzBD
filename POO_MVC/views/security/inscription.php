
            <div class=" inscription-form-header">
                <h1 class="h4 m-0">S'INSCRIRE</h1>
                <p class="mb-1 ">Pour proposer un quizz</p>
                <hr class="w-50 m-0">
            </div>

            <div class="inscription-form-body row">
                <div class="col-md-7">
                     <?php
                        if(isset($err_login)){ 
                     ?>
                        <small id="fileHelpId" class="form-text text-danger font-weight-bold "><?=$err_login?></small>
                      <?php
                        }
                     ?>
                    <form class="pr-5" method="post" action="<?=URL_ROOT?>/security/creerCompte">
                        <div class="form-group mb-1">
                            <label class="m-0 p-1" for="prenom">Prenom</label>
                            <input name="prenom" type="text" class="form-control" id="prenom">
                            <?php
                               if(isset($errors['prenom'])){ 
                           ?>   
                                 <small id="fileHelpId" class="form-text text-danger font-weight-bold "><?=$errors['prenom']?></small>
                         <?php
                          }
                         ?>
                        </div>

                        <div class="form-group mb-1">
                            <label class="m-0 p-1" for="nom">Nom</label>
                            <input name="nom" type="text" class="form-control" id="nom">
                                    <?php
                                    if(isset($errors['nom'])){ 
                                ?>   
                                        <small id="fileHelpId" class="form-text text-danger font-weight-bold "><?=$errors['nom']?></small>
                                <?php
                                }
                                ?>
                        </div>

                        <div class="form-group  mb-1">
                            <label class="m-0 p-1" for="login">Login</label>
                            <input name="login" type="text" class="form-control" id="login">
                            <?php
                               if(isset($errors['login'])){ 
                           ?>   
                                 <small id="fileHelpId" class="form-text text-danger font-weight-bold "><?=$errors['login']?></small>
                         <?php
                          }
                         ?>
                        </div>

                        <div class="form-group mb-1">
                            <label class="m-0 p-1" for="password1">Password</label>
                            <input name="password1" type="password" class="form-control" id="password1">
                            <?php
                               if(isset($errors['password1'])){ 
                           ?>   
                                  <small id="fileHelpId" class="form-text text-danger font-weight-bold "><?=$errors['password1']?></small>
                                 <?php
                               }
                         ?>

                        </div>

                        <div class="form-group mb-1">
                            <label class="m-0 p-1" for="password2">Confirmer Password</label>
                            <input name="password2" type="password" class="form-control" id="password2">

                            <?php
                               if(isset($errors['password2'])){ 
                           ?>   
                                  <small id="fileHelpId" class="form-text text-danger font-weight-bold "><?=$errors['password2']?></small>
                                 <?php
                               }
                         ?>
                        </div>

                        <div class="form-group  my-2 d-flex justify-content-between">
                            <label class="d-block">Avatar</label>
                            <button class="btn btn-primary d-block">choisir un fichier</button>
                        </div>



                        <button type="submit" name="btn_inscription" class="btn btn-primary">Creer compte</button>

                </div>
                <div class="col-md-4">
                    <div class="avatar w-75 ">
                        <img class="img-fluid" src="./img/" alt="">
                    </div>
                </div>
        