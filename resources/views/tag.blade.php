@extends('layouts.frondend')
@section('contentlayout')
<?php $lang = session()->get('lang') ; ?>


 <div class="mean-content" style="margin-top: 15px;">

<div class="container">
    <div class="single-left-content no-padding">
      <div class="tab-item tab-by-category" id="tab_entertainment">

        <div id="ad_zone_02" class="ads_items mobile top_category_ads ad-250"></div>

        <ul class="nav nav-tabs home-tabs entertainment" role="tablist" style="border-color:#6f313a">

                    <li role="presentation" class="sponsor">
            <a target="_blank" href="{{$adsTagHeadLine->url}}" title="Opens in a new window">
              <div class="sponsor_by">
              @lang('header.sponsor_by')
              </div>

              <img class="sponsor_img lozad" target="_blank" src="{{asset('')}}/{{$adsTagHeadLine->images}}">
            </a>
          </li>

        <li role="presentation" class="switch-view-li">
            <a href="#" class="switch-view" id="grid">
              <i class="fa fa-th-large"></i>
            </a>
          </li>
          <li role="presentation" class="active switch-view-li">
            <a href="#" class="switch-view" id="list">
              <i class="fa fa-th-list"></i>
            </a>
          </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content white-bg category-tab-content">
        @foreach ($tagbanner as $tagbanners)
            <div class="tab-content-banner">

                        <img class="img-responsive lozad" src="{{asset('')}}/{{$tagbanners->images}}">


            </div>
            @endforeach
          <div role="tabpanel" class="tab-pane fade in active ajax-content" id="entertainment">

            <div id="posts_list" class="list">


                  <div class="list-items">


                  @foreach ($tagall as $tagalls)

                  <div class="row list-item item">
                    <a href="{{ route('pressrelease',$tagalls->id)}}?pressrelease={{$tagalls->tag_id}}">
   
                      <div class="col-md-4 col-sm-12 tumbnail">
                        <div class="box ratio16_9">
                        <img class="ele lozad" src="{{asset('')}}/{{$tagalls->images}}">
                        </div>
                      </div>
                      <div class="col-md-8 col-sm-12 content">
                        <div class="title">
                          <span class="web">


                 @if(Session::has('lang'))
                  @if($lang == 'kh')
                  {{$tagalls->title_kh}}
                      @else
                      {{$tagalls->title_en}}
                      @endif @else
                      {{$tagalls->title_kh}}
                      @endif
                          </span>

                          <div class="small">
                            <ul>
                              <li> <span class="pub-date" date="{{ $tagalls->created_at}}">{{ $tagalls->created_at}}</span></li>
                            </ul>
                            <div class="clear"></div>
                          </div>
                        </div>
                        <p class="detail">


                 @if(Session::has('lang'))
                  @if($lang == 'kh')
                  {{$tagalls->description_kh}}​
                      @else
                      {{$tagalls->description_en}}​
                      @endif @else
                      {{$tagalls->description_kh}}​
                      @endif
                        </p>
                      </div>
                    </a>
                  </div>

                  @endforeach



        </div>
        {{ $tagall->links() }}
                    <!-- pagination -->
            </div>
          </div>

          <div class="clear"></div>
                </div>

      </div>
    </div>
    <div class="single-right-content">

    <div id="ad_zone_02" class="ads_items web" zone="117">

      @include('include.adstop')


    </div>
        <!-- Popular news block -->
    <div class="posts_item right-hot-news">
        <div class="">
          @include('include.pop-news')
       </div>
    <div id="ad_zone_02" class="ads_items web" zone="117">
      @include('include.adscenter')
    </div>


    <div class="posts_item right-hot-news">
      <div class="">
        @include('include.new-news')
    </div>
    <div id="ad_zone_03" class="ads_items web" zone="117">

      @include('include.adsbottom')
     </div>

        </div>
</div>

    </div>


@stop