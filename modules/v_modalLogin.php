<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog cascading-modal" role="document">
    
    <div class="modal-content">

        
        <div class="modal-c-tabs">

            
            <ul class="nav nav-tabs tabs-2 grey lighten-4" role="tablist">
                <li class="nav-item waves-effect waves-light">
                    <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab">
                        <i class="fa fa-user mr-1"></i> 
                        Se connecter
                    </a>
                </li>
                <li class="nav-item waves-effect waves-light">
                    <a class="nav-link" data-toggle="tab" href="#panel8" role="tab">
                        <i class="fa fa-user-plus mr-1"></i> 
                        S'inscrire
                    </a>
                </li>
            </ul>

            
            <div class="tab-content">
                
                <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                    
                    <div class="modal-body mb-1">
                    <form method="get" action="scripts/login.php">
                        <div class="md-form form-sm">
                            <i class="fa fa-envelope prefix" ></i>
                            <input id="Email" name="email" class="form-control" type="text">
                            <label for="Email">Email</label>
                        </div>

                        <div class="md-form form-sm">
                            <i class="fa fa-lock prefix" ></i>
                            <input id="Password" name="password" class="form-control" type="password">
                            <label for="Password">Mot de passe</label>
                        </div>
                        <div class="text-center mt-2">
                            <button class="btn waves-effect waves-light green" href="http:://google.fr">Se connecter <i class="fa fa-sign-in ml-1"></i></button>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                        <div class="options text-center text-md-right mt-1">
                            <p>Oublié <a href="#" class="green-text">mot de passe?</a></p>
                        </div>
                        <button type="button" class="btn btn-outline-green waves-effect ml-auto" data-dismiss="modal">Close</button>
                    </div>

                </div>
                </form>
                


                <div class="tab-pane fade" id="panel8" role="tabpanel">

                                <form method="get" action="scripts/register.php">
                    <div class="modal-body">
                        <div class="md-form form-sm">
                            <i class="fa fa-envelope prefix"></i>
                            <input id="Email" name="email" class="form-control" type="text">
                            <label for="Email">Email</label>
                        </div>
                        
                        <div class="md-form form-sm">
                            <i class="fa fa-envelope prefix"></i>
                            <input id="Email" name="email" class="form-control" type="text">
                            <label for="Email">Email</label>
                        </div>

                        <div class="md-form form-sm">
                            <i class="fa fa-lock prefix"></i>
                            <input id="Password" name="password" class="form-control" type="password">
                            <label for="Password">Mot de passe</label>
                        </div>

                        <div class="md-form form-sm">
                            <i class="fa fa-lock prefix"></i>
                            <input id="PasswordConfirmation" name="passwordConfirmation" class="form-control" type="password">
                            <label for="PasswordConfirmation">Confirmation mot de passe</label>
                        </div>

                        <div class="text-center form-sm mt-2">
                            <button class="btn btn-info waves-effect waves-light green">S'inscrire <i class="fa fa-sign-in ml-1"></i></button>
                        </div>

                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-green waves-effect ml-auto" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </form>
                
            </div>

        </div>
    </div>
</div>
</div>