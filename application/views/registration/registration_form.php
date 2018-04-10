
  <div class="portlet light bordered col-md-8 col-md-offset-2">
                                          <div class="portlet-title">
                                                <div class="caption ">
                                                        <!-- <i class="fa fa-user font-green-seagreen"></i> -->
                                                        
                                                        <img class="col-md-7 col-md-offset-3" src="<?php echo base_url(). 'assets/img/Webp.net-resizeimage (9).png'?>">
                                                        
                                                        
                                                       
                                                    </div> 
                                                <div class="actions">
                                                  
                                                    
                                                </div>
                                            </div>

                                            <div class="portlet-title">
                                                <div class="caption font-green-seagreen">
                                                        <i class="fa fa-user font-green-seagreen"></i>
                                                        <span class="caption-subject bold uppercase "> Registration Form</span>
                                                    </div> 
                                                <div class="actions">
                                                  
                                                    
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <form action="<?php echo base_url(). 'registration/student/add' ?>" id="form_sample_16" class="form-horizontal" method="post" enctype="multipart/form-data">
                                                    <div class="form-body">
                                                    <div class="alert alert-danger display-hide">
                                                <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                            <div class="alert alert-success display-hide">
                                                <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                   <div class="alert alert-block alert-info fade in">
                                                        <p><b>'<span style="color:red;">*</span>' fields are compulsory.</b></p>
                                                    </div>
                                                        
                                                    <div class="row">
                                                        <div class="col-md-11">
                                                                    <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">Student's Name<span class="required" aria-required="true">*</span></label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-user"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="text" data-rule-required="true" data-rule-minlength="3" data-rule-maxlength="40" pattern="[a-zA-Z0-9\s]+" id="name" name="student_name" class="form-control" placeholder="" value="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">Father's Name<span class="required" aria-required="true">*</span></label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-user"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="text"  id="lname"  data-rule-required="true" pattern="[a-zA-Z0-9\s]+" name="guardian_name" class="form-control" placeholder="" value="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->


                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">CNIC/B.Form No<span class="required" aria-required="true">*</span></label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-credit-card"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="text" data-rule-required="true"  id="cnic2" maxlength="15" minlength="15" name="student_national_id" class="form-control" placeholder="" value="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">Parent CNIC<span class="required" aria-required="true">*</span> </label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-credit-card"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="text"   name="guardian_national_id" data-rule-required="true" class="form-control" maxlength="15" minlength="15" id="cnic" value="">
                                                                                </div>
                                                                                <div class="help-block">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">Gender</label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-user-md"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <select class="form-control"   id="gender" name="student_gender"  required>
                                                                               <option value="">Select</option>
                                                                               <option value="male" >Male</option>
                                                                               <option value="female">Female</option>
                                                                                         </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                             <div class="col-md-6">
                                                                <div class="form-group">
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label"> Date of Birth <span class="required" aria-required="true">*</span></label>
                                                                    <div class="col-md-7">
                                                                        <div class="input-group">
                                                                           
                                                                           <div class="input-group input-medium date date-picker"  data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                                                                <input type="date" id="blood" name="student_date_of_birth" data-rule-required="true" value="" class="form-control" >
                                                                                <span class="input-group-btn">
                                                                                    <button class="btn default" type="button" readonly>
                                                                                        <i class="fa fa-calendar"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <!--  -->
                                                            <!--  -->                                                    
                                                        <!--  -->
                                                        
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">Branch</label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-tint"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <select class="form-control"  id="blood" name="branch_name" >
                                                                               <option>Select</option>
                                                                               <option value="a" >A</option>
                                                                               <option value="b">B</option>
                                                                               <option value="ab" >C</option>
                                                                               <option value="o">D</option>
                                                                                         </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">Place Of Birth </label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-globe"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="text" pattern="[a-zA-Z0-9\s]+" name="student_place_of_birth" id="pob" class="form-control" placeholder="" value="">
                                                                                </div>
                                                                                <div class="help-block">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        
                                                        <!--  -->
                                                        <!--  -->

                                                         <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">Nationality<span class="required" aria-required="true">*</span></label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-flag"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <select class="form-control" data-rule-required="true" id="nationality" name="student_nationality" required>
                                                                                    
                                                                                      <option value="">Select</option>
                                                                                       <option value="p">Pakistan</option>
                                                                                        <option value="d">Dubai</option>
                                                                                         <option value="c">China</option>


                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            <div class="col-md-6">
                                                                     <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">Language</label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-language"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <select class="form-control"  id="language" name="language" >
                                                                               <option>Select</option>
                                                                               <option >English</option>
                                                                               <option >Chinese</option>
                                                                               <option >Arabic</option>
                                                                               
                                                                                         </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/row-->
                                                        
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">Religion</label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-credit-card"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <select class="form-control"  id="religion" name="student_religion" >
                                                                               <option>Select</option>
                                                                               <option >Isalm</option>
                                                                               <option >christian</option>
                                                                               <option >Hindu</option>
                                                                               
                                                                                         </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">Email:<span class="required" aria-required="true">*</span> </label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-envelope-o"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="email" data-rule-required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  name="contact_email" class="form-control" placeholder="" value="">
                                                                                </div>
                                                                                <div class="help-block">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        
                                                        <!--     <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group ">
                                                                    <label class="control-label col-md-4">Select Image <span class="required">*</span></label>
                                                                    <div class="col-md-8">
                                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> 
                                                                    
                                                                           
                                                                            </div>
                                                                                
                                                                            <div>
                                                                                <span class="btn blue-madison  btn-file">
                                                                                    <span class="fileinput-new"> Select image </span>
                                                                                    <span class="fileinput-exists"> Change </span>
                                                                                            
                                                                              
                                                                                    <input type="file" name="image" data-rule-extension="jpg|jpeq|png|tif|gif|bmp"  > </span>
                                                                             
                                                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div> -->
                                                            
                                                            <!--  -->
                                                            <!--  -->
                                                            <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">Office Phone</label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-phone"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="text" id="phone" data-rule-required="true" minlength="7" maxlength="7" name="contact_line" class="form-control" data-validation="number" value="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">Mobile:<span class="required" aria-required="true">*</span> </label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-phone"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="text" minlength="11" maxlength="11" id="mobile" data-rule-required="true" name="contact_cell" data-validation="number" class="form-control" placeholder="" value="">
                                                                                </div>
                                                                                <div class="help-block">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                            <!--  -->
                                                            <!--  -->
                                                        <div class="row">
                                                            
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">Reason for Leaving</label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-map-marker"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <textarea type="text" pattern="([a-zA-Z0-9]| |/|\\|@|#|\$|%|&)+"  name="registration_reason_for_leaving" class="form-control"  value=""></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                             <div class="col-md-6">
                                                               <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">Res. Address</label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-map-marker"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <textarea type="text" pattern="([a-zA-Z0-9]| |/|\\|@|#|\$|%|&)+"  name="address_local" class="form-control" placeholder="Permanent" value=""></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/row-->

                                                        <div class="row">
                                                           
                                                            <!--/span-->
                                                             <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">Admission required from</label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                   <i class="fa fa-calendar"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="date"  name="registration_admission_required_from" class="form-control" placeholder="" value="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                             <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">Last School Attented<span class="required" aria-required="true">*</span></label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                   <i class="fa fa-registered"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="text" data-rule-required="true" data-rule-maxlength="80" name="registration_last_school_name" id="las" pattern="[a-zA-Z0-9\s]+" class="form-control" placeholder="" value="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                             
                                                              <!-- <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">Registration Sought in Class</label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                   <i class="fa fa-registered"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="text" id="rsc" name="fb_id" class="form-control" placeholder="" value="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                           <!--  <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">Registration Sought in Class</label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="far fa-registered"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="text" minlength="1" maxlength="4"  name="guardianname" class="form-control" placeholder="" value="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                          
                                                        </div>
                                                        
                                                        <!--/row-->

                                                        <div class="row">
                                                           
                                                            <!--/span-->
                                                           <!--   <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">Last School Attented<span class="required" aria-required="true">*</span></label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                   <i class="fa fa-registered"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="text" data-rule-required="true" data-rule-maxlength="80" name="fb_id" id="las" class="form-control" placeholder="" value="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                             
                                                           <!--  <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">Registration Sought in Class</label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="far fa-registered"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="text" data-rule-minlength="3" data-rule-maxlength="80" name="guardianname" class="form-control" placeholder="" value="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                          
                                                        </div>

                                                        <div class="row">
                                                           
                                                            <!--/span-->
                                                             <div class="col-md-6">
                                                                 <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">FROM</label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                   <i class="fa fa-calendar"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="date"  name="registration_last_school_from" class="form-control" placeholder="" value="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                             
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-4">To</label>
                                                                        <div class="col-md-8">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="far fa-registered"></i>
                                                                                </span>
                                                                                <div class="input-icon right">
                                                                                    <i class="fa"></i>
                                                                                    <input type="date"  name="registration_last_school_to" class="form-control" placeholder="" value="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                          
                                                        </div>
                                                    </div>
                                                        
                                                 
                                                    
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-5 col-md-6">
                                                           <!--     <a href="" value="cancel" name="action" class="btn red-mint"><i class="glyphicon glyphicon-arrow-left"></i>
                                                                Go to menu</a> -->
                                                                <button type="submit" name="action" value="save" class="btn btn-md green-meadow"><i class="glyphicon glyphicon-ok-sign"></i>
                                                                Submit</button>
                                                               
                                                               <!--  <button name="action" type="submit" value="submit" class="btn btn-md green-meadow"><i class="glyphicon glyphicon-arrow-right"></i>
                                                                Submit & Next</button>
                                                                 -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
   
                            
                            
                            
                            
                    
                            
                           
                            
<script src="<?php echo base_url(). 'assets/global/plugins/respond.min.js'?>"></script>
<script src="<?php echo base_url(). 'assets/global/plugins/excanvas.min.js'?>"></script> 

        <!-- BEGIN CORE PLUGINS -->
       <script src="<?php echo base_url(). 'assets/global/plugins/jquery.min.js'?>" type="text/javascript"></script>
        <script src="<?php echo base_url(). 'assets/global/plugins/bootstrap/js/bootstrap.min.js'?>" type="text/javascript"></script>
        <script src="<?php echo base_url(). 'assets/global/plugins/js.cookie.min.js'?>" type="text/javascript"></script>
        <script src="<?php echo base_url(). 'assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js'?>" type="text/javascript"></script>
        <script src="<?php echo base_url(). 'assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'?>" type="text/javascript"></script>
        <script src="<?php echo base_url(). 'assets/global/plugins/jquery.blockui.min.js'?>" type="text/javascript"></script>
        <script src="<?php echo base_url(). 'assets/global/plugins/uniform/jquery.uniform.min.js'?>" type="text/javascript"></script>
        <script src="<?php echo base_url(). 'assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'?>" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="<?php echo base_url(). 'assets/global/scripts/app.min.js'?>" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(). 'assets/global/plugins/jquery-validation/js/jquery.validate.min.js'?>" type="text/javascript"></script>
<!--  --><script src="<?php echo base_url(). 'assets/global/plugins/jquery-validation/js/additional-methods.min.js'?>" type="text/javascript"></script>
   <script src="<?php echo base_url(). 'assets/layouts/layout/scripts/demo.min.js'?>" type="text/javascript"></script>
         <script src="<?php echo base_url(). 'assets/layouts/global/scripts/quick-sidebar.min.js'?>" type="text/javascript"></script> 
<!--  -->
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>   

     <script src="<?php echo base_url(). 'assets/pages/scripts/validation.js'?>" type="text/javascript"></script>

     <script>
  $(document).ready(function() {
    // $('#name').on('keypress', function(key) {
    //     if((key.charCode < 97 || key.charCode > 122) && (key.charCode < 65 || key.charCode > 90) && (key.charCode != 45)) {
    //         return false;   
    //     }
    // });
     $("#name").keypress(function(event){
        var inputValue = event.which;
        // allow letters and whitespaces only.
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) { 
            event.preventDefault(); 
        }
    });
      $("#las").keypress(function(event){
        var inputValue = event.which;
        // allow letters and whitespaces only.
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) { 
            event.preventDefault(); 
        }
    });
      $("#lname").keypress(function(event){
        var inputValue = event.which;
        // allow letters and whitespaces only.
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) { 
            event.preventDefault(); 
        }
    });
       $("#pob").keypress(function(event){
        var inputValue = event.which;
        // allow letters and whitespaces only.
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) { 
            event.preventDefault(); 
        }
    });
      
      $('#phone').on('keypress', function(key) {
        if(key.charCode < 48 || key.charCode > 57) {
            return false;
        }
    });
       $('#cnic').on('keypress', function(key) {
        if(key.charCode < 48 || key.charCode > 57) {
            return false;
        }
    });
        $('#cnic2').on('keypress', function(key) {
        if(key.charCode < 48 || key.charCode > 57) {
            return false;
        }
    });

    $('#mobile').on('keypress', function(key) {
        if(key.charCode < 48 || key.charCode > 57) {
            return false;
        }
    });
    
      $("#rsc").keypress(function(event){
        var inputValue = event.which;
        // allow letters and whitespaces only.
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) { 
            event.preventDefault(); 
        }
    });

     
    
    $('#cnic').keydown(function(){

  //allow  backspace, tab, ctrl+A, escape, carriage return
  if (event.keyCode == 8 || event.keyCode == 9 
                    || event.keyCode == 27 || event.keyCode == 13 
                    || (event.keyCode == 65 && event.ctrlKey === true) )
                        return;
  if((event.keyCode < 48 || event.keyCode > 57))
   event.preventDefault();

  var length = $(this).val().length; 
              
  if(length == 5 || length == 13)
   $(this).val($(this).val()+'-');

 });
     $('#cnic2').keydown(function(){

  //allow  backspace, tab, ctrl+A, escape, carriage return
  if (event.keyCode == 8 || event.keyCode == 9 
                    || event.keyCode == 27 || event.keyCode == 13 
                    || (event.keyCode == 65 && event.ctrlKey === true) )
                        return;
  if((event.keyCode < 48 || event.keyCode > 57))
   event.preventDefault();

  var length = $(this).val().length; 
              
  if(length == 5 || length == 13)
   $(this).val($(this).val()+'-');

 });

   
});
</script>
   </body>
  </html>
