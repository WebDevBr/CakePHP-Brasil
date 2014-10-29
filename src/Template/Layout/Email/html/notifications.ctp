
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- Define Charset -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<!-- Responsive Meta Tag -->
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

    <title>Campaigner - Responsive Email Template</title><!-- Responsive Styles and Valid Styles -->

    <style type="text/css">
        
        body{
            width: 100%; 
            background-color: #fff; 
            color: #fff;
            margin:0; 
            padding:0; 
            -webkit-font-smoothing: antialiased;
        }
        
        html{
            width: 100%; 
        }
        
        table{
            font-size: 14px;
            border: 0;
        }
        a {color:#fff;font-weight:bold;text-transform: none;text-decoration: none;}
        
        /* ----------- responsivity ----------- */
        @media only screen and (max-width: 640px){
        
            /*------ top header ------ */
            .header-bg{width: 440px !important; height: 10px !important;}
            .main-header{line-height: 28px !important;}
            .main-subheader{line-height: 28px !important;}
            
            .container{width: 440px !important;}
            .container-middle{width: 420px !important;}
            .mainContent{width: 400px !important;}
            
            .main-image{width: 400px !important; height: auto !important;}
            .banner{width: 400px !important; height: auto !important;}
            
            /*------- prefooter ------*/
            .prefooter-header{padding: 0 10px !important; line-height: 24px !important;}
            .prefooter-subheader{padding: 0 10px !important; line-height: 24px !important;}
            /*------- footer ------*/
            .top-bottom-bg{width: 420px !important; height: auto !important;}
            
        }
        
        @media only screen and (max-width: 479px){
        
            /*------ top header ------ */
            .header-bg{width: 280px !important; height: 10px !important;}
            .top-header-left{width: 260px !important; text-align: center !important;}
            .top-header-right{width: 260px !important;}
            .main-header{line-height: 28px !important; font-size: 20px !important; text-align: center !important;}
            .main-subheader{line-height: 28px !important; text-align: center !important;}
            
            /*------- header ----------*/
            .logo{width: 260px !important;}
            .nav{width: 260px !important;}
                        
            .container{width: 280px !important;}
            .container-middle{width: 260px !important;}
            .mainContent{width: 240px !important;}
            
            .main-image{width: 240px !important; height: auto !important;}
            .banner{width: 240px !important; height: auto !important;}
            
            /*------- prefooter ------*/
            .prefooter-header{padding: 0 10px !important;line-height: 28px !important;}
            .prefooter-subheader{padding: 0 10px !important; line-height: 28px !important;}
            /*------- footer ------*/
            .top-bottom-bg{width: 260px !important; height: auto !important;}
            
        }
        
        
    </style>
    
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <table border="0" width="100%" cellpadding="0" cellspacing="0">
        <tr><td height="30"></td></tr>
        <tr bgcolor="#fff">
            <td width="100%" align="center" valign="top" bgcolor="#fff">
                
                <table border="0" width="600" cellpadding="0" cellspacing="0" align="center" class="container">
                    <tr>
                        <td>
                     <?php echo $this->Html->image('Email/top-header-bg.png',array('style'=>'display:block','class'=>'header-bg','fullBase' => true)); ?>

                        </td>
                    </tr>
                    
                    <tr bgcolor="b8271a"><td height="5"></td></tr>
                    
                    <tr bgcolor="b8271a">
                        <td align="center">
                            <table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container-middle">
                                <tr>
                                    <td>
                                        <table border="0" align="left" cellpadding="0" cellspacing="0" class="top-header-left">
                                            <tr>
                                                <td align="center">
                                                    <table border="0" cellpadding="0" cellspacing="0" class="date">
                                                        <tr>
                                                            <td>
 <?php echo $this->Html->image('Email/icon-cal.png', array(
 'editable'=>'true','mc:edit'=>'icon1','width'=>'13','style'=>'display:block;','fullBase' => true)); ?>
                                                            </td>
                                                            <td>&nbsp;&nbsp;</td>
                                                            <td mc:edit="date" style="color: #fff; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
                                                                <singleline>
                                                                   <b><?php echo date('d/m/Y') ?></b>
                                                                </singleline>
                                                            </td>
                                                        </tr>
                
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        
                                        <table border="0" align="left" cellpadding="0" cellspacing="0" align="center" class="top-header-right">
                                            <tr><td width="30" height="20"></td></tr>
                                        </table>
                                        
                                        <table border="0" align="right" cellpadding="0" cellspacing="0" align="center" class="top-header-right">
                                            <tr>
                                                <td align="center">
                                                    <table border="0" cellpadding="0" cellspacing="0" align="center" class="tel">
                                                        <tr>
                                                            <td style="color: #fff; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
                                                             <b>CakePHP Brasil</b>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>                                           
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <tr bgcolor="b8271a"><td height="10"></td></tr>
                    
                </table>
                
                
                
                <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="container" bgcolor="ececec">
                    
                    
                    <tr bgcolor="ececec"><td height="40"></td></tr>
                    
                    <tr>
                        <td>
                            <table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container-middle">
                                <tr>
                                    
                             <td align="center">
                                                    <?php
                                                     echo $this->Html->image('Email/logo.png',array('fullBase' => true));
                                                    ?>
                                                </td>
                                    
                                </tr>
                            </table>
                        </td>
                    </tr>
                     <?php echo $this->fetch('content');?>
                    
                    <tr>
                        <td>
                            <table border="0" width="560" align="center" cellpadding="0" cellspacing="0" class="container-middle">
                                <tr>
                                    <td>
                          
                                        <table border="0" align="left" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td height="20" width="20"></td>
                                            </tr>
                                        </table>
                                        <table border="0" align="right" cellpadding="0" cellspacing="0" class="nav">
                                            <tr><td height="10"></td></tr>
                                            <tr>
                                                <td align="center" mc:edit="socials" style="font-size: 13px; font-family: Helvetica, Arial, sans-serif;">
                                                    <table border="0" align="center" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td>
                           <?php echo $this->Html->link($this->Html->image('Email/social-google.png',array(
                           'editable'=>'true','mc:edit'=>'google','width'=>'16','style'=>'display: block','alt'=>'google plus','fullBase' => true)),'/',array('style'=>'display: block; width: 16px','escape'=>false)); ?>

                                                            </td>
                                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                                            <td>
                            <?php echo $this->Html->link($this->Html->image('Email/social-youtube.png',array(
                           'editable'=>'true','mc:edit'=>'youtube','width'=>'16','style'=>'display: block','alt'=>'youtube','fullBase' => true)),'/',array('style'=>'display: block; width: 16px','escape'=>false)); ?>
                                                            </td>
                                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                                            <td>
                           <?php echo $this->Html->link($this->Html->image('Email/social-facebook.png',array(
                           'editable'=>'true','mc:edit'=>'facebook','width'=>'16','style'=>'display: block','alt'=>'facebook','fullBase' => true)),'/',array('style'=>'display: block; width: 16px','escape'=>false)); ?>
                                                                
                                                            </td>
                                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                                            <td>
                  <?php echo $this->Html->link($this->Html->image('Email/social-twitter.png',array(
                           'editable'=>'true','mc:edit'=>'twitter','width'=>'16','style'=>'display: block','alt'=>'twitter','fullBase' => true)),'/',array('style'=>'display: block; width: 16px','escape'=>false)); ?>
                                                            </td>

                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
   
                    
                    <tr><td height="30"></td></tr>
                </table>
                
                                
               
                <table border="0" width="600" cellpadding="0" cellspacing="0" class="container">
                    <tr bgcolor="b8271a"><td height="14"></td></tr>
                    <tr bgcolor="b8271a">
                        <td mc:edit="copy3" align="center" style="color: #fff; font-size: 13px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
                            <multiline>
                              CakePHP Brasil © Copyright 2014 . All Rights Reserved
                            </multiline>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <?php echo $this->Html->image('Email/bottom-footer-bg.png',array('style'=>'display:block','class'=>'header-bg','fullBase' => true)); ?>
                        </td>
                    </tr>
                </table>
                
            </td>
        </tr>
        
        <tr><td height="30"></td></tr>
        
    </table>
    
    
</body>
</html>
        