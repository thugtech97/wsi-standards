Dear {{ $adminInfo->firstname }},

{{ $clientInfo['fname']." ".$clientInfo['lname'] }} has sent an inquiry for your action.
Please see details of the inquiry below.

Subject: {{ $clientInfo['inquiry_type'] }}
Name: {{ $clientInfo['fname']." ".$clientInfo['lname'] }}
Email: {{ $clientInfo['email'] }}
Contact Number: {{ $clientInfo['contact'] }}
Message: {{ $clientInfo['message'] }}


Regards,
{{ $setting->company_name }}



{{ $setting->company_name }}
{{ $setting->company_address }}
{{ $setting->tel_no }} | {{ $setting->mobile_no }}

{{ url('/') }}
