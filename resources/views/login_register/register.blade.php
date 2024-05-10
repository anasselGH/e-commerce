<div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form  action="{{ route('user.store') }} " method="POST">
                                    @csrf
                                        <div class="form-group">
                                            <label for="register-email">Your nom </label>
                                            <input type="text" class="form-control" id="register-email" name="nom" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="register-email">Your  prenom </label>
                                            <input type="text" class="form-control" id="register-email" name="prenom" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="register-email">Your  adresse </label>
                                            <input type="text" class="form-control" id="register-email" name="adresse" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="register-email">Your  ville </label>
                                            <input type="text" class="form-control" id="register-email" name="ville" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="register-email">Your  email </label>
                                            <input type="email" class="form-control" id="register-email" name="email" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="register-password">Password </label>
                                            <input type="password" class="form-control" id="register-password" name="password" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="register-email">Your  tel </label>
                                            <input type="number" class="form-control" id="register-email" name="tel" >
                                        </div><!-- End .form-group -->    
                                         <div style=" display: flex; justify-content: space-between;">
                                         <label for="">User is:</label>
                                        <div class="custom-control custom-radio">
                                                <input type="radio" value="isAdmin" class="custom-control-input" name="isAdmin" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">isAdmin</label>
                                            </div><!-- End .custom-checkbox -->
                                          
                                            <div class="custom-control custom-radio">
                                            <input type="radio" value="not Admin" name="isAdmin"  class="custom-control-input" id="register-policy1" required>
                                                <label class="custom-control-label"  for="register-policy1">not Admin</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div>
                                            <!-- <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div> -->
                                            <!-- End .custom-checkbox -->
                                        
                                        </div><!-- End .form-footer -->
                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>
                                            
                                        </div><!-- End .form-footer -->
                                    </form>
                                    
                                </div>