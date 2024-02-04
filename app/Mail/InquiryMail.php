<?php

namespace App\Mail;

use App\Helpers\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $setting;
    public $clientInfo;
    public $emailContent;
    /**
     * Create a new message instance.
     *
     * @param $setting
     * @param $clientInfo
     */
    public function __construct($setting, $clientInfo)
    {
        $this->setting = $setting;
        $this->clientInfo = $clientInfo;
        //$this->emailContent = $setting->contact_us_email_layout;
        $this->emailContent = "Dear {name},<br><br>

        You have sent an inquiry for your action.
        Please see details of the inquiry below.<br><br>
        
        Subject: {subject} <br>
        Name: {name} <br>
        Email: {email} <br>
        Contact Number: {contact} <br>
        Message: {message} <br><br>
        
        
        Regards, <br>
        {company_name}<br><br>
        
        
        
        {company_name} <br>
        {company_address} <br>
        {company_telephone_no} | {company_mobile_no} <br><br>
        
        {website_url}
        ";
    }

    /**
     * pwede
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $companyLogo = asset('storage/logos/'.$this->setting->company_logo);
        $this->emailContent = str_replace('{company_logo}', $companyLogo, $this->emailContent);
        $this->emailContent = str_replace('{name}', $this->clientInfo['fname']." ".$this->clientInfo['lname'], $this->emailContent);
        $this->emailContent = str_replace('{email}', $this->clientInfo['email'], $this->emailContent);
        $this->emailContent = str_replace('{contact}', $this->clientInfo['contact'], $this->emailContent);
        $this->emailContent = str_replace('{subject}', $this->clientInfo['inquiry_type'], $this->emailContent);
        $this->emailContent = str_replace('{message}', $this->clientInfo['message'], $this->emailContent);
        $this->emailContent = str_replace('{company_name}', $this->setting->company_name, $this->emailContent);
        $this->emailContent = str_replace('{company_address}', $this->setting->company_address, $this->emailContent);
        $this->emailContent = str_replace('{company_telephone_no}', $this->setting->tel_no, $this->emailContent);
        $this->emailContent = str_replace('{company_mobile_no}', $this->setting->mobile_no, $this->emailContent);
        $this->emailContent = str_replace('{website_url}', url('/'), $this->emailContent);

        return $this->view('mail.inquiry')
            ->subject('Inquiry Received');
        // ->text('mail.inquiry_plain')
    }
}
