
    <style>
        body, div, h1,h2, form, fieldset, input, textarea, footer,p {
            margin: 0; padding: 0; border: 0; outline: none;
            margin: 0; padding: 0; border: 0; outline: none;
        }
        body {background: #ccc url('../design/images/bg_out.png'); color: #7c7873; font-family: 'YanoneKaffeesatzRegular';}
        p {text-shadow:0 1px 0 #fff; font-size:21px;}
        #wrap {width:530px; margin:20px auto 0; height:500px;}
        h1 {margin-bottom:-150px; text-align:center;font-size:48px; text-shadow:0 1px 0 #ede8d9; }




        #form_wrap.hide:after, #form_wrap.hide:before {display:none; }


        form {background:#f7f2ec url('../design/images/letter_bg.png');
            position:relative;top:200px;overflow:hidden;
            height:200px;width:400px;margin:0px auto;padding:20px;
            border: 1px solid #fff;
            border-radius: 3px;
            -moz-border-radius: 3px; -webkit-border-radius: 3px;
            box-shadow: 0px 0px 3px #9d9d9d, inset 0px 0px 27px #fff;
            -moz-box-shadow: 0px 0px 3px #9d9d9d, inset 0px 0px 14px #fff;
            -webkit-box-shadow: 0px 0px 3px #9d9d9d, inset 0px 0px 27px #fff;}


        #form_wrap form {
            position: relative;
            bottom: 25px;
            padding: 50px;
            overflow: scroll;
            height: 200px;}
        label {
            margin: 11px 20px 0 0;
            font-size: 16px; color: #b3aba1;
            text-transform: uppercase;
            text-shadow: 0px 1px 0px #fff;
        }

        input[type=text], textarea {
            font: 14px normal normal uppercase helvetica, arial, serif;
            color: #7c7873;background:none;
            width: 380px; height: 36px; padding: 0px 10px; margin: 0 0 10px 0;
            border:1px solid #f8f5f1;
            -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px;
            -moz-box-shadow: inset 0px 0px 1px #726959;
            -webkit-box-shadow:  inset 0px 0px 1px #b3a895;
            box-shadow:  inset 0px 0px 1px #b3a895;
        }

        textarea { height: 80px; }

        textarea:focus, input[type=text]:focus {background:rgba(255,255,255,.35);}

        #form_wrap input[type=submit] {
            position:relative;font-family: 'YanoneKaffeesatzRegular';
            font-size:24px; color: #7c7873;text-shadow:0 1px 0 #fff;
            width:100%; text-align:center;opacity:1;
            background:none;
            cursor: pointer;
            -moz-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px;
        }

        #form_wrap input:hover[type=submit] {color:#435c70;}
    </style>
    <meta charset="utf-8" />
    <title>Contact Form</title>
<div id="wrap">
    <h1>Drop me a Message!</h1>
    <div id='form_wrap'>
        <form id="contact-form" action="javascript:alert('success!');">

            <p id="formstatus"></p>
            <p>Hello Joe,</p>
            <label for="email">Your Message : </label>
            <textarea  name="message" value="Your Message" id="message" ></textarea>
            <p>Best,</p>
            <label for="name">Name: </label>
            <input type="text" name="name" value="" id="name" />
            <label for="email">Email: </label>
            <input type="text" name="email" value="" id="email" />
            <input type="submit" name ="submit" value="OK I want to send it now, thanks!" />
        </form>
    </div>
</div>
