 <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
              <div class="topbar">

                        <nav class="navbar-custom">

                            <ul class="list-inline float-right mb-0">
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="ion-ios7-bell noti-icon"></i>
                                        <span class="badge badge-success noti-icon-badge">3</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5><span class="badge badge-danger float-right">87</span>Notification</h5>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary"><i class="mdi mdi-message"></i></div>
                                            <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary"><i class="mdi mdi-martini"></i></div>
                                            <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                        </a>

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            View All
                                        </a>

                                    </div>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="<?php echo base_url(); ?>assets/images/users/photo3.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success pull-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Create Account</a>
                                        <a class="dropdown-item" href="<?php echo base_url();?>welcome"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">CAR CRIME CONTROL SYSTEM</h3>
                                </li>
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->
                        <div class="page-content-wrapper ">

                        <div class="container">

                         <div class="row">
                               
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-primary">
                                        <span class="mini-stat-icon"><i class="mdi ion-ios7-paper"></i></span>
                                        <div class="mini-stat-info text-right text-white">
                                            <?php $total_case=0; $total_fine=0;
                                            ?>
                                            <?php foreach($all_single_car_case as $case) { ?>   
                                              <?php
                                               $total_case=$total_case+1;
                                               $total_fine=$total_fine+$case->fine;
                                              ?></td>
                                                   
                                                <?php }?>
                                            <span class="counter">
                                            <?php echo $total_case;
                                            ?></span>
                                             
                                            
                                            Total Case
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-primary">
                                       <span class="mini-stat-icon"><i class="mdi ion-ios7-paper"></i></span>
                                        <div class="mini-stat-info text-right text-white">
                                            <span class="counter">2</span>
                                            Running Case
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-primary">
                                        <span class="mini-stat-icon"><i class="mdi mdi-currency-usd"></i></span>
                                        <div class="mini-stat-info text-right text-white">
                                            <span class="counter"><?php echo $total_fine?></span>
                                            Total Case Fine
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-primary">
                                        <span class="mini-stat-icon"><i class="mdi mdi-currency-usd"></i></span>
                                        <div class="mini-stat-info text-right text-white">
                                            <span class="counter">500</span>
                                            Total Due
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- end row -->


                           
                             <div class="row">
                                <div class="col-md-6 col-lg-6 col-xl-6">

                                    <!-- Simple card -->
                                   <div class="card m-b-20">
                                        <div class="card-block">

                                            <h6 >Car Information</h6>

                                            <div class="">
                                                <?php $car_number?>
                                                 <?php foreach($all_car as $car) { ?>
                                                <table class="table table-bordered table-striped table-responsive">
                                                    <thead>
                                                  
                                                    </thead>
                                                    <tbody>
                                                   
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Car Number</th>
                                                        <td colspan="5" style="width:100%; text-align: center;"><?php echo $car->car_number;?></td>
                                                        <?php $car_number=$car->car_number;?>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Car Name</th>
                                                        <td colspan="5" style="width:100%; text-align: center;"><?php echo $car->car_name;?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Category</th>
                                                        <td colspan="5" style="width:100%; text-align: center;"><?php echo $car->category;?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Color</th>
                                                        <td colspan="5" style="width:100%; text-align: center;"><?php echo $car->color;?></td>
                                                    </tr>
                                                                                                     <tr>
                                                        <th class="text-nowrap" scope="row">CC</th>
                                                        <td colspan="5" style="width:100%; text-align: center;"><?php echo $car->cc;?></td>
                                                    </tr>
                                                
                                                     <tr>
                                                        <th class="text-nowrap" scope="row">Chassis No</th>
                                                        <td colspan="5" style="width:100%; text-align: center;"><?php echo $car->chasis_number;?></td>
                                                    </tr>
                                                     <tr>
                                                        <th class="text-nowrap" scope="row">Body type</th>
                                                        <td colspan="5" style="width:100%; text-align: center;"><?php echo $car->body_type;?></td>
                                                    </tr>
                                                     <tr>
                                                        <th class="text-nowrap" scope="row">Fuel type</th>
                                                        <td colspan="5" style="width:100%; text-align: center;"><?php echo $car->fuel_type;?></td>
                                                    </tr>
                                                   
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">Horse Power</th>
                                                        <td colspan="5" style="width:100%; text-align: center;"><?php echo $car->horse_power;?></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-nowrap" scope="row">year of manufacture</th>
                                                        <td colspan="5" style="width:100%; text-align: center;"><?php echo $car->mnu_date;?></td>
                                                    </tr>
                                                     <tr>
                                                        <th class="text-nowrap" scope="row">year of registration</th>
                                                        <td colspan="5" style="width:100%; text-align: center;"><?php echo $car->reg_date;?></td>
                                                    </tr>
                                                   
                                                    </tbody>
                                                </table>
                                                 <?php }?>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- end col -->

                              

                                  <div class="col-md-6 col-lg-6 col-xl-6">

                                    <!-- Simple card -->
                                    <div class="card m-b-20">
                                        <img class="card-img-top img-fluid" src="<?php echo base_url();?>assets/images/small/img-8.jpg" alt="Card image cap">
                                       
                                    </div>

                                </div><!-- end col -->
                                         
                                          
                            </div>
                             <div class="row">
                                 
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-block">
                                            <h4 class="mt-0 m-b-15 header-title"> Crimes Information</h4>

                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                 <tr>
                                                    <th>Serial No</th>
                                                    <th>Car Number</th>
                                                    <th>Status</th>
                                                    <th>Location</th>
                                                    <th>Start Date</th>
                                                    <th>Fine</th>
                                                     <th>Due Date</th>
                                                </tr>

                                                </thead>
                                                <tbody>
                                                <?php $i=1;?>
                                                <?php foreach($all_single_car_case as $case) { ?>   
                                               <tr>
                                                    <td><?php echo $i++;
                                                        $total_case=$total_case+1;    
                                                        ?></td>
                                                    <td><?php echo $case->case_id?></td>
                                                    <td><?php echo $case->car_number?></td>
                                                    <td><?php echo $case->location?></td>
                                                    <td><?php echo $case->date?></td>
                                                    <td>‎৳<?php echo $case->fine?></td>
                                               
                                                    <td>‎<?php ?></td>
                                                      <?php if($case->fine-$case->amount<=0){
                                                        echo'<td><span class="badge badge-primary">Close</span></td>';
                                                    }
                                                    else
                                                         echo'<td><span class="badge badge-primary">Active</span></td>';
                                                    
                                                 ?>
                                                    }   </tr>
                                                <?php }?>
                                              
                                               
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->
                              <from>

                             <div class="row">
                               
                                <div class="col-xl-4">
                                        <div class="card-block">
                                            <h4 class="mt-0 header-title">General Crimes</h4>
                                    <div class="card m-b-20">
                                        

                                  

                                             <div class="form-group">
                                                  
                                                 <form action="<?php echo base_url();?>welcome/make_crime" method="post">
                                                    <div>

                                                       
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="general" value="general" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">General fine</span>
                                                        </label></br>
                                                         <label class="custom-control custom-checkbox">
                                                             <input type="checkbox" name="hydrolic_horn" value="hydrolic" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Using hydrolic horn</span>
                                                        </label>
                                                         <label class="custom-control custom-checkbox">
                                                             <input type="checkbox" name="deny_order" value="deny_order" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Disobey police order, refusal to cooperate </span>
                                                        </label>
                                                          <label class="custom-control custom-checkbox">
                                                              <input type="checkbox"name="deny_signel" value="deny_signal" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Disobeying red signal</span>
                                                        </label></br>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="careless_drive"  value="careless_drive" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Careless driving</span>
                                                        </label></br>
                                                          <label class="custom-control custom-checkbox">
                                                              <input type="checkbox" name="accident" value="accident" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Accident related fine </span>
                                                        </label></br>
                                                         <label class="custom-control custom-checkbox">
                                                             <input type="checkbox" name="safety" value="Driving with out safety" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Driving without safety </span>
                                                        </label></br>
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="smoke" value="smoke" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Black smoke emission</span>
                                                        </label></br> 
                                                         <label class="custom-control custom-checkbox">
                                                             <select name="location" class="form-control" required>
                                                         <option value="0">Select Occurrence  Location</option>
                                                        <option value="Danmondi">Danmondi</option>
                                                        <option value="Motijil">Motijil</option>
                                                        <option value="Uttora">Uttora</option>
                                                        <option value="Kolabagan">Kolabagan</option>
                                                        <option value="MohammodPur"> Mohammedpur</option> 
                                                        <option value="Romna">Romna</option>
                                                        <option value="Tajgoan">Tajgoan</option>
                                                        <option value="Banani">Banani</option>
                                                        <option value="Mirput">Mirpur</option>
                                                        <option value="Polton">Polton</option>
                                                        <option value="Komolapur">Komolapur</option>
                                                        <option value="Khilkhat">Khilkhat</option>
                                                        <option value="Khilgoan">Khilgoan</option>
                                                        <option value="New Market">New Market</option>
                                                             
                                                         
                                                         
                                                    </select>
                                                           
                                                        </label><input type="hidden" value="<?php echo $car_number;?>" name="car_number">
                                                        </br>
                                                        <div class="form-group m-b-0" style="float: right;margin-right: 88px;">
                                                    <div>
                                                        <button type="submit"  class="btn btn-primary waves-effect waves-light">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>


                                                      

                                                    </div>
                                                     </form>
                                                </div>
                                      
                                            
                                             
                                        </div>
                                    </div>
                                </div>

                                      <div class="col-xl-4">
                                        <div class="card-block">
                                            <h4 class="mt-0 header-title">Car Paper Related Crimes</h4>
                                    <div class="card m-b-20">

                                  

                                             <div class="form-group">
                                                  
                                                     
                                                    <div>

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Modification of car and sale without permission</span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Driving without registration, fitness, or route permit</span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Overloading the car</span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Driving without insurance</span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Careless driving</span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Driving without permission </span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Driving without safety </span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description"> Blocking road or public place</span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                    <div class="col-xl-4">
                                        <div class="card-block">
                                            <h4 class="mt-0 header-title">Driver Related</h4>
                                    <div class="card m-b-20">

                                  

                                             <div class="form-group">
                                                  
                                                     
                                                    <div>

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Unauthorized touch/use of car</span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Using hydrolic horn</span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Disobey police order, refusal to cooperate </span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Disobeying red signal</span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Careless driving</span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Accident related fine </span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Driving without safety </span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                             <div class="form-group">
                                                  
                                                    <div>
                                                     

                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" data-parsley-multiple="groups"
                                                                   data-parsley-mincheck="2">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description">Black smoke emission</span>
                                                        </label>

                                                      

                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                    

                            </div>
 </form>
                        </div><!-- container -->


                    </div>
                    <div class="form-group m-b-0" style="float: right;margin-right: 20px;">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                   
                            <!-- end row -->

                        </div><!-- container -->


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2017 Saiful|Saif.
                </footer>

            </div>