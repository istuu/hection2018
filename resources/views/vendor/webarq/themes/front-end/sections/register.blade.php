<div class="md-padding scrollable-section relative parallax" data-section-title="Register" style="background: url('{{ asset('frontend') }}/images/bgs/sec-bg-01.jpg');" data-stellar-background-ratio="0.6">
    <div class="container">

        <div class="white-bg tbl wid-50 border5px p-a-3">
            <div class="heading main centered">
                <h3 class="uppercase lg-title"><span class="main-color">Get In </span> Touch</h3>
            </div>

            <form id="contact-form" class="ajax-form" name="contact" action="{{ asset('frontend') }}/php/sendemail.php" method="post" novalidate="novalidate">

                <div class="contact-msg">
                    <div class="alert alert-success">
                        <img alt="" src="{{ asset('frontend') }}/images/ajax-loader.gif" class="contact-loader">
                        <div class="success-msg">
                            <i class="fa fa-thumbs-o-up ico-block"></i>
                            <p>Thanks for getting in touch with us, We'll check your message and get back to you shortly!</p>
                        </div>
                    </div>
                </div>

                <div class="row over-hidden">

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="contact-name">Name <small class="red-color">*</small></label>
                        <div class="col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" id="contact-name" name="contact-name" class="form-control required">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="contact-email">Email <small class="red-color">*</small></label>
                        <div class="col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input type="email" id="contact-email" name="contact-email" class="form-control required">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="contact-phone">Phone</label>
                        <div class="col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input type="text" id="contact-phone" name="contact-phone" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="contact-subject">Subject <small class="red-color">*</small></label>
                        <div class="col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                <input type="text" id="contact-subject" name="contact-subject" class="form-control required">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="contact-message">Message <small class="red-color">*</small></label>
                        <div class="col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <textarea id="contact-message" name="contact-message" rows="6" cols="30" class="form-control required"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-12 m-t-2">
                        <button class="btn main-bg btn-block btn-lg border5px" type="submit" id="contact-submit" name="contact-submit" value="submit"><i class="fa fa-send"></i>Send Message</button>
                    </div>

                </div>


            </form>
        </div>

    </div>
</div>
