<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Contact Inquiry</title>
    <link rel="stylesheet" href="{{ url('front/assets/css/email.css') }}">
</head>

<body style="padding: 0px; margin: 0px;">
    <div id="mailsub" class="notification" align="center">

        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="min-width: 320px;">
            <tr>
                <td align="center" bgcolor="#eff3f8">


                    <!--[if gte mso 10]>
                <table width="680" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                <![endif]-->

                    <table border="0" cellspacing="0" cellpadding="0" class="table_width_100" width="100%"
                        style="max-width: 680px; min-width: 300px;">
                        <!--header -->
                        <tr>
                            <td align="center" bgcolor="#eff3f8">
                                <!-- padding -->
                                <div style="height: 20px; line-height: 20px; font-size: 10px;">&nbsp;</div>
                                <table width="96%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td align="left">
                                            &nbsp;
                                        </td>
                                    </tr>
                                </table>
                                <!-- padding -->
                            </td>
                        </tr>
                        <!--header END-->


                        <tr>
                            <td align="center" bgcolor="#ffffff">
                                <table width="90%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td align="center">
                                            <!-- padding -->
                                            <div style="height: 25px; line-height: 25px; font-size: 10px;">&nbsp;</div>
                                            <div>
                                                <a href="{{ url('/') }}" target="_blank"
                                                    style="color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 13px;">
                                                    <font face="Arial, Helvetica, sans-seri; font-size: 13px;"
                                                        size="3" color="#596167">
                                                        <img src="{{ url('assets/images/maruti-industries-logo-header.png') }}"
                                                            alt="Maruti Industries Image"> </font>
                                                </a>
                                            </div>
                                            <!-- padding -->
                                            <div style="height: 30px; line-height: 30px; font-size: 10px;">&nbsp;</div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!--content 1 -->
                        <tr>
                            <td align="center" bgcolor="#ffffff">
                                <table width="90%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td align="center">
                                            <!-- padding -->
                                            <div style="line-height: 44px;">
                                                <font face="Arial, Helvetica, sans-serif" size="5" color="#57697e"
                                                    style="font-size: 34px;">
                                                    <span
                                                        style="font-family: Arial, Helvetica, sans-serif; font-size: 34px; color: #57697e;">
                                                        New Contact Inquiry
                                                    </span>
                                                </font>
                                            </div>
                                            <!-- padding -->
                                            <div style="height: 30px; line-height: 30px; font-size: 10px;">&nbsp;</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <div style="line-height: 30px;">
                                                <font face="Arial, Helvetica, sans-serif" size="5" color="#4db3a4"
                                                    style="font-size: 17px;">
                                                    <span
                                                        style="font-family: Arial, Helvetica, sans-serif; font-size: 17px; color: #4db3a4;">
                                                        Hi, New contact request generated at website contact page
                                                    </span>
                                                </font>
                                            </div>
                                            <!-- padding -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <table width="100%" align="center" cellspacing="0" cellpadding="10"
                                                border="1" style="border-color: #ffffff">
                                                <tr>
                                                    <th align="center">
                                                        <div style="line-height: 24px;">
                                                            <font face="Arial, Helvetica, sans-serif" size="4"
                                                                color="#57697e" style="font-size: 16px;">
                                                                <span
                                                                    style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #57697e;">
                                                                    IP
                                                                </span>
                                                            </font>
                                                        </div>
                                                    </th>
                                                    <td align="center">
                                                        <div style="line-height: 24px;">
                                                            <font face="Arial, Helvetica, sans-serif" size="4"
                                                                color="#57697e" style="font-size: 16px;">
                                                                <span
                                                                    style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #57697e;">
                                                                    {{ $data['ip'] }}
                                                                </span>
                                                            </font>
                                                        </div>
                                                    </td>
                                                </tr>

                                                @if(isset($data['name']))
                                                <tr>
                                                    <th align="center">
                                                        <div style="line-height: 24px;">
                                                            <font face="Arial, Helvetica, sans-serif" size="4"
                                                                color="#57697e" style="font-size: 16px;">
                                                                <span
                                                                    style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #57697e;">
                                                                    Full Name
                                                                </span>
                                                            </font>
                                                        </div>
                                                    </th>
                                                    <td align="center">
                                                        <div style="line-height: 24px;">
                                                            <font face="Arial, Helvetica, sans-serif" size="4"
                                                                color="#57697e" style="font-size: 16px;">
                                                                <span
                                                                    style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #57697e;">
                                                                    {{ $data['name'] }}
                                                                </span>
                                                            </font>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endif

                                                @if(isset($data['email']))
                                                <tr>
                                                    <th align="center">
                                                        <div style="line-height: 24px;">
                                                            <font face="Arial, Helvetica, sans-serif" size="4"
                                                                color="#57697e" style="font-size: 16px;">
                                                                <span
                                                                    style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #57697e;">
                                                                    Email
                                                                </span>
                                                            </font>
                                                        </div>
                                                    </th>
                                                    <td align="center">
                                                        <div style="line-height: 24px;">
                                                            <font face="Arial, Helvetica, sans-serif" size="4"
                                                                color="#57697e" style="font-size: 16px;">
                                                                <span
                                                                    style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #57697e;">

                                                                    {{ isset($data['email']) ? $data['email'] : 'N/A' }}

                                                                </span>
                                                            </font>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endif

                                                @if(isset($data['mobile']))
                                                <tr>
                                                    <th align="center">
                                                        <div style="line-height: 24px;">
                                                            <font face="Arial, Helvetica, sans-serif" size="4"
                                                                color="#57697e" style="font-size: 16px;">
                                                                <span
                                                                    style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #57697e;">
                                                                    Phone Number
                                                                </span>
                                                            </font>
                                                        </div>
                                                    </th>
                                                    <td align="center">
                                                        <div style="line-height: 24px;">
                                                            <font face="Arial, Helvetica, sans-serif" size="4"
                                                                color="#57697e" style="font-size: 16px;">
                                                                <span
                                                                    style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #57697e;">
                                                                    {{ $data['mobile'] }}
                                                                </span>
                                                            </font>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endif

                                                @if(isset($data['subject']))
                                                <tr>
                                                    <th align="center">
                                                        <div style="line-height: 24px;">
                                                            <font face="Arial, Helvetica, sans-serif" size="4"
                                                                color="#57697e" style="font-size: 16px;">
                                                                <span
                                                                    style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #57697e;">
                                                                    Message
                                                                </span>
                                                            </font>
                                                        </div>
                                                    </th>
                                                    <td align="center">
                                                        <div style="line-height: 24px;">
                                                            <font face="Arial, Helvetica, sans-serif" size="4"
                                                                color="#57697e" style="font-size: 16px;">
                                                                <span
                                                                    style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #57697e;">
                                                                    {{ isset($data['subject']) ? $data['subject'] : 'N/A' }}

                                                                </span>
                                                            </font>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endif
                                                @if(isset($data['qty']))
                                                <tr>
                                                    <th align="center">
                                                        <div style="line-height: 24px;">
                                                            <font face="Arial, Helvetica, sans-serif" size="4"
                                                                color="#57697e" style="font-size: 16px;">
                                                                <span
                                                                    style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #57697e;">
                                                                  Quantity
                                                                </span>
                                                            </font>
                                                        </div>
                                                    </th>
                                                    <td align="center">
                                                        <div style="line-height: 24px;">
                                                            <font face="Arial, Helvetica, sans-serif" size="4"
                                                                color="#57697e" style="font-size: 16px;">
                                                                <span
                                                                    style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #57697e;">
                                                                    {{ isset($data['qty']) ? $data['qty'] : 'N/A' }}

                                                                </span>
                                                            </font>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endif
                                                @if(isset($data['product_interest']))
                                                <tr>
                                                    <th align="center">
                                                        <div style="line-height: 24px;">
                                                            <font face="Arial, Helvetica, sans-serif" size="4"
                                                                color="#57697e" style="font-size: 16px;">
                                                                <span
                                                                    style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #57697e;">
                                                                    Product_Interest
                                                                </span>
                                                            </font>
                                                        </div>
                                                    </th>
                                                    <td align="center">
                                                        <div style="line-height: 24px;">
                                                            <font face="Arial, Helvetica, sans-serif" size="4"
                                                                color="#57697e" style="font-size: 16px;">
                                                                <span
                                                                    style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #57697e;">
                                                                    {{ isset($data['product_interest']) ? $data['product_interest'] : 'N/A' }}

                                                                </span>
                                                            </font>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endif

                                                @if(isset($data['description']))
                                                <tr>
                                                    <th align="center">
                                                        <div style="line-height: 24px;">
                                                            <font face="Arial, Helvetica, sans-serif" size="4"
                                                                color="#57697e" style="font-size: 16px;">
                                                                <span
                                                                    style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #57697e;">
                                                                    Description
                                                                </span>
                                                            </font>
                                                        </div>
                                                    </th>
                                                    <td align="center">
                                                        <div style="line-height: 24px;">
                                                            <font face="Arial, Helvetica, sans-serif" size="4"
                                                                color="#57697e" style="font-size: 16px;">
                                                                <span
                                                                    style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #57697e;">
                                                                    {{ isset($data['description']) ? $data['description'] : 'N/A' }}

                                                                </span>
                                                            </font>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endif


                                                <tr>
                                                    <th align="center">
                                                        <div style="line-height: 24px;">
                                                            <font face="Arial, Helvetica, sans-serif" size="4"
                                                                color="#57697e" style="font-size: 16px;">
                                                                <span
                                                                    style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #57697e;">
                                                                    Page URL
                                                                </span>
                                                            </font>
                                                        </div>
                                                    </th>
                                                    <td align="center">
                                                        <div style="line-height: 24px;">
                                                            <font face="Arial, Helvetica, sans-serif" size="4"
                                                                color="#57697e" style="font-size: 16px;">
                                                                <span
                                                                    style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #57697e;">
                                                                    @if (isset($data['page_url']) && !empty($data['page_url']))
                                                                        {{ $data['page_url'] }}
                                                                    @else
                                                                        -
                                                                    @endif
                                                                </span>
                                                            </font>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                            <br>
                                            <!-- padding -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <br>
                                            <table width="80%" align="center" border="0" cellspacing="0"
                                                cellpadding="0">
                                                <tr>
                                                    <td align="center">
                                                        <div style="line-height: 24px;">
                                                            <font face="Arial, Helvetica, sans-serif" size="4"
                                                                color="#57697e" style="font-size: 16px;">
                                                                <span
                                                                    style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
                                                                    We also love hearing from you and helping you with
                                                                    any issues you have. Please replay to this email if
                                                                    you want to ask a question or just say hi.
                                                                </span><br>
                                                            </font>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- padding -->
                                            <div style="height: 45px; line-height: 45px; font-size: 10px;">&nbsp;</div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <!--content 1 END-->


                        <!--footer -->
                        <tr>
                            <td class="iage_footer" align="center" bgcolor="#eff3f8">
                                <!-- padding -->
                                <div style="height: 40px; line-height: 40px; font-size: 10px;">&nbsp;</div>

                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td align="center">
                                            <font face="Arial, Helvetica, sans-serif" size="3" color="#96a5b5"
                                                style="font-size: 13px;">
                                                <span
                                                    style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #96a5b5;">
                                                    {{ config('settings.email_copy_rights_text') }}
                                                </span>
                                            </font>
                                        </td>
                                    </tr>
                                </table>

                                <!-- padding -->
                                <div style="height: 50px; line-height: 50px; font-size: 10px;">&nbsp;</div>
                            </td>
                        </tr>
                        <!--footer END-->
                    </table>
                    <!--[if gte mso 10]>
                </td></tr>
                </table>
                <![endif]-->

                </td>
            </tr>
        </table>

    </div>
</body>

</html>
