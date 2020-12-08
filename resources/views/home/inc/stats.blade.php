<?php
$hideOnMobile = '';
if (isset($statsOptions, $statsOptions['hide_on_mobile']) and $statsOptions['hide_on_mobile'] == '1') {
	$hideOnMobile = ' hidden-sm';
}
?>
@if (isset($countPosts) and isset($countUsers) and isset($countCities))
@includeFirst([config('larapen.core.customizedViewPath') . 'home.inc.spacer', 'home.inc.spacer'], ['hideOnMobile' => $hideOnMobile])
<div class="container{{ $hideOnMobile }}">
	<div class="page-info page-info-lite rounded">
		<div class="text-center section-promo">
			<div class="row">
	
				@if (isset($countPosts))
				<div class="col-sm-4 col-xs-6 col-xxs-12">
					<div class="iconbox-wrap">
						<div class="iconbox">
							<div class="iconbox-wrap-icon">
								<i class="icon icon-docs"></i>
							</div>
							<div class="iconbox-wrap-content">
								<h5><span>{{ $countPosts }}</span></h5>
								<div class="iconbox-wrap-text">{{ t('free_ads') }}</div>
							</div>
						</div>
					</div>
				</div>
				@endif
	
				@if (isset($countUsers))
				<div class="col-sm-4 col-xs-6 col-xxs-12">
					<div class="iconbox-wrap">
						<div class="iconbox">
							<div class="iconbox-wrap-icon">
								<i class="icon icon-group"></i>
							</div>
							<div class="iconbox-wrap-content">
								<h5><span>{{ $countUsers }}</span></h5>
								<div class="iconbox-wrap-text">{{ t('Trusted Sellers') }}</div>
							</div>
						</div>
					</div>
				</div>
				@endif
	
				@if (isset($countCities))
				<div class="col-sm-4 col-xs-6 col-xxs-12">
					<div class="iconbox-wrap">
						<div class="iconbox">
							<div class="iconbox-wrap-icon">
								<i class="icon icon-map"></i>
							</div>
							<div class="iconbox-wrap-content">
								<h5><span>{{ $countCities . '+' }}</span></h5>
								<div class="iconbox-wrap-text">{{ t('locations') }}</div>
							</div>
						</div>
					</div>
				</div>
				@endif
	
			</div>
		</div>
	</div>
</div>
@endif
<div class="container">
	<div class="row">
		<div class="col-md-12 col-xs-12 col-sm-12">
			<ul id="clientlogos">
				<li data-thumb="images/logos/1.png" data-src="images/logos/1.png">
					<img src="images/logos/1.png" class="logo_image"/>
				</li>
				<li data-thumb="images/logos/2.png" data-src="images/logos/2.png">
					<img src="images/logos/2.png" class="logo_image" />
				</li>
				<li data-thumb="images/logos/3.png" data-src="images/logos/3.png">
					<img src="images/logos/3.png" class="logo_image" />
				</li>

				<li data-thumb="images/logos/4.png" data-src="images/logos/4.png">
					<img src="images/logos/4.png" class="logo_image"  />
				</li>
				<li data-thumb="images/logos/5.png" data-src="images/logos/5.png">
					<img src="images/logos/5.png" class="logo_image" />
				</li>
				<li data-thumb="images/logos/6.png" data-src="images/logos/6.png">
					<img src="images/logos/6.png" class="logo_image" />
				</li>

				<li data-thumb="images/logos/7.png" data-src="images/logos/7.png">
					<img src="images/logos/7.png" class="logo_image"  />
				</li>
				<li data-thumb="images/logos/8.png" data-src="images/logos/8.png">
					<img src="images/logos/8.png" class="logo_image" />
				</li>
				<li data-thumb="images/logos/9.png" data-src="images/logos/9.png">
					<img src="images/logos/9.png" class="logo_image" />
				</li>
				<li data-thumb="images/logos/10.png" data-src="images/logos/10.png">
					<img src="images/logos/10.png" class="logo_image" />
				</li>
				<li data-thumb="images/logos/11.png" data-src="images/logos/11.png">
					<img src="images/logos/11.png" class="logo_image" />
				</li>
				<li data-thumb="images/logos/12.png" data-src="images/logos/12.png">
					<img src="images/logos/12.png" class="logo_image" />
				</li>

				<li data-thumb="images/logos/13.png" data-src="images/logos/13.png">
					<img src="images/logos/13.png" class="logo_image"  />
				</li>
				<li data-thumb="images/logos/14.png" data-src="images/logos/14.png">
					<img src="images/logos/14.png" class="logo_image" />
				</li>
				<li data-thumb="images/logos/15.png" data-src="images/logos/15.png">
					<img src="images/logos/15.png" class="logo_image" />
				</li>

				<li data-thumb="images/logos/16.png" data-src="images/logos/16.png">
					<img src="images/logos/16.png" class="logo_image"  />
				</li>
				<li data-thumb="images/logos/17.png" data-src="images/logos/17.png">
					<img src="images/logos/17.png" class="logo_image" />
				</li>
				<li data-thumb="images/logos/18.png" data-src="images/logos/18.png">
					<img src="images/logos/18.png" class="logo_image" />
				</li>
				<li data-thumb="images/logos/19.png" data-src="images/logos/19.png">
					<img src="images/logos/19.png" class="logo_image" />
				</li>

				<li data-thumb="images/logos/20.png" data-src="images/logos/20.png">
					<img src="images/logos/20.png" class="logo_image"  />
				</li>
				<li data-thumb="images/logos/21.png" data-src="images/logos/21.png">
					<img src="images/logos/21.png" class="logo_image" />
				</li>
				<li data-thumb="images/logos/22.png" data-src="images/logos/22.png">
					<img src="images/logos/22.png" class="logo_image" />
				</li>
				<li data-thumb="images/logos/23.png" data-src="images/logos/23.png">
					<img src="images/logos/23.png" class="logo_image" />
				</li>
				<li data-thumb="images/logos/24.png" data-src="images/logos/24.png">
					<img src="images/logos/24.png" class="logo_image" />
				</li>
				
				<li data-thumb="images/logos/25.png" data-src="images/logos/25.png">
					<img src="images/logos/25.png" class="logo_image" />
				</li>
				
				<li data-thumb="images/logos/26.png" data-src="images/logos/26.png">
					<img src="images/logos/26.png" class="logo_image" />
				</li>
				
				<li data-thumb="images/logos/27.png" data-src="images/logos/27.png">
					<img src="images/logos/27.png" class="logo_image" />
				</li>
				
				<li data-thumb="images/logos/28.png" data-src="images/logos/28.png">
					<img src="images/logos/28.png" class="logo_image" />
				</li>
				
				<li data-thumb="images/logos/29.png" data-src="images/logos/29.png">
					<img src="images/logos/29.png" class="logo_image" />
				</li>
				
				<li data-thumb="images/logos/30.png" data-src="images/logos/30.png">
					<img src="images/logos/30.png" class="logo_image" />
				</li>
				
				
			</ul>
		</div>
	</div>
</div>

<style>
	.logo_image{
		text-align:center;
		
	}
</style>
