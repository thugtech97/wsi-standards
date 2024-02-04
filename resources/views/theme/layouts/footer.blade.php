@php
	$footer = \App\Models\Page::where('slug', 'footer')->first();
	$contents = $footer->contents;
	
	$mediaAccounts = \App\Models\MediaAccounts::all();
	$mediaAccountHtml = '';
	foreach ($mediaAccounts as $mediaAccount) {
				$mediaAccountHtml.='<a href="'.$mediaAccount->media_account.'" class="social-icon si-small si-light si-'.$mediaAccount->name.'" target="_blank">
									<i class="icon-'.$mediaAccount->name.'"></i>
									<i class="icon-'.$mediaAccount->name.'"></i>
								</a>';
			
	}

	$keywords   = ['{Media Accounts}'];
    $variables  = [$mediaAccountHtml];

    $contents = str_replace($keywords,$variables,$contents);
@endphp

{!! $contents !!}
