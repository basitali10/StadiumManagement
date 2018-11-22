<?php $__env->startSection('content'); ?>
	
<div class="container">
    <div class="contact">
    <div class="col-md-6 send-contact">
    <h4>Send us message</h4>
    <form>
        <div class="grid-contact">
            <div class="col-md-6 contact-left">
                <p class="your-para"> Name<span>*</span></p>
                <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
            </div>
            <div class="col-md-6 contact-left">
                <p class="your-para"> Email address<span>*</span></p>
                <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="subject">
            <p class="message-para"> Subject<span>*</span></p>
            <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
        </div>
            <p class="message-para">Message<span>*</span></p>
            <textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"></textarea>
            <div class="send">
                <input type="submit" value="SEND" >
            </div>
            <div class="clearfix"> </div>
    </form>
 </div>
 <div class="col-md-6 send-contact">
    <h4>Get in touch</h4>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>
    </div>
</div>
    <div class="clearfix"> </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>