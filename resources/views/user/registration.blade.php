@extends('layouts.home')
@section('content')

<div class="container master-container">
    <div class="alert alert-info fade in" data-alert="alert">

    </div>



    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-success">
                <div class="panel-heading">Bootstrap: Basic Form</div>
                <div class="panel-body">
                    <form role="form">
                        <div class="form-group">
                            <label class="control-label" for="fullname">Name</label>
                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter Your Full Name">
                            <p class="help-block"></p>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="birthdate">Birthdate</label>
                            <input type="text" class="form-control" name="birthdate" id="birthdate" placeholder="Enter Your Birthdate">
                            <p class="help-block"></p>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                            <p class="help-block"></p>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="contact_no">Telephone No</label>
                            <input type="text" class="form-control" id="contact_no" placeholder="Enter Telephone No">
                            <p class="help-block"></p>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="city_id">Telephone No</label>
                            <input type="text" class="form-control" id="city_id" placeholder="Enter Current City">
                            <p class="help-block"></p>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="profile_image">Profile Image</label>
                            <input type="file" id="profile_image" name="profile_image">
                            <p class="help-block">Max Upload Size 2MB, supported format:jpg/png</p>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="profile_video">Profile Video</label>
                            <input type="file" id="profile_video" name="profile_video">
                            <p class="help-block">Max Upload Size 10MB, supported format:mp4/webm</p>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="document">Document</label>
                            <input type="file" id="document" name="document">
                            <p class="help-block">Max Upload Size 2MB, supported format:pdf</p>
                        </div>

                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Active
                                </label>
                            </div>
                            <p class="help-block"></p>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Choices</label>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsRadios" id="optionsCheckbox1" value="option1" checked="">
                                    Option one is this and that—be sure to include why it's great
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="optionsRadios" id="optionsCheckbox2" value="option2">
                                    Option two can be something else and selecting it will deselect option one
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Sex</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                    Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    Female
                                </label>
                            </div>
                            <p class="help-block"></p>
                        </div>

                        <button type="submit" class="btn btn-default">Create User</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Simple Form: Basic Form</div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" action="http://simple-form-bootstrap.plataformatec.com.br/examples/create_basic" class="simple_form new_user_basic" enctype="multipart/form-data" id="new_user_basic" method="post" novalidate="novalidate"><div style="display:none"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="hhn826SoVJfTY1vmvwdGVBewXg/3irBfnFok9JkjEis="></div>


                        <div class="form-group email required user_basic_email"><label class="email required control-label" for="user_basic_email"><abbr title="required">*</abbr> Email</label><input class="string email required form-control" id="user_basic_email" name="user_basic[email]" placeholder="Enter email" type="email"><p class="help-block"></p></div>

                        <div class="form-group password required user_basic_password"><label class="password required control-label" for="user_basic_password"><abbr title="required">*</abbr> Password</label><input class="password required form-control" id="user_basic_password" name="user_basic[password]" placeholder="Password" type="password"><p class="help-block"></p></div>

                        <div class="form-group file optional user_basic_file"><label class="file optional control-label" for="user_basic_file">File</label><input class="file optional" id="user_basic_file" name="user_basic[file]" type="file"><p class="help-block">Example block-level help text here.</p></div>

                        <div class="form-group boolean optional user_basic_active"><div class="checkbox"><input name="user_basic[active]" type="hidden" value="0"><label class="boolean optional" for="user_basic_active"><input class="boolean optional" id="user_basic_active" name="user_basic[active]" type="checkbox" value="1">Active</label></div><p class="help-block"></p></div>

                        <div class="form-group check_boxes optional user_basic_choices"><label class="check_boxes optional control-label">Choices</label><span class="checkbox"><label for="user_basic_choices_option_one_is_this_and_thatbe_sure_to_include_why_its_great" name="user_basic[choices]"><input class="check_boxes optional" id="user_basic_choices_option_one_is_this_and_thatbe_sure_to_include_why_its_great" name="user_basic[choices][]" type="checkbox" value="Option one is this and that—be sure to include why it's great">Option one is this and that—be sure to include why it's great</label></span><span class="checkbox"><label for="user_basic_choices_option_two_can_be_something_else_and_selecting_it_will_deselect_option_one" name="user_basic[choices]"><input class="check_boxes optional" id="user_basic_choices_option_two_can_be_something_else_and_selecting_it_will_deselect_option_one" name="user_basic[choices][]" type="checkbox" value="Option two can be something else and selecting it will deselect option one">Option two can be something else and selecting it will deselect option one</label></span><input name="user_basic[choices][]" type="hidden" value=""></div>

                        <div class="form-group radio_buttons optional user_basic_sex"><label class="radio_buttons optional control-label">Sex</label><span class="radio"><label for="user_basic_sex_male" name="user_basic[sex]"><input class="radio_buttons optional" id="user_basic_sex_male" name="user_basic[sex]" type="radio" value="Male">Male</label></span></div></form></div></div></div></div></div>
@endsection
@stop