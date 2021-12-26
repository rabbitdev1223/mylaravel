@extends('layouts.admin.master')

@section('title')Layout dark
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
@endpush

@section('content')
  @component('components.breadcrumb')
    @slot('breadcrumb_title')
      <h3>Layout dark</h3>
    @endslot
    <li class="breadcrumb-item">Starter Kit</li>
    <li class="breadcrumb-item">Color Version</li>
    <li class="breadcrumb-item active">Layout dark</li>
  @endcomponent
  
  <div class="container-fluid">
      <div class="row starter-main">
          <div class="col-sm-12">
              <div class="card">
                  <div class="card-header d-flex align-items-center justify-content-between">
                      <h5>Kick start your project development !</h5>
                      <div class="setting-list">
                          <ul class="list-unstyled setting-option">
                              <li>
                                  <div class="setting-white"><i class="icon-settings"></i></div>
                              </li>
                              <li><i class="view-html fa fa-code font-primary"></i></li>
                              <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                              <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                              <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                              <li><i class="icofont icofont-error close-card font-primary"> </i></li>
                          </ul>
                      </div>
                  </div>
                  <div class="card-body">
                      <p>
                          Getting start with your project custom requirements using a ready template which is quite difficult and time taking process, viho Admin provides useful features to kick start your project development with no efforts
                          !
                      </p>
                      <ul>
                          <li>
                              <p>viho Admin provides you getting start pages with different layouts, use the layout as per your custom requirements and just change the branding, menu & content.</p>
                          </li>
                          <li>
                              <p>Every components in viho Admin are decoupled, it means use only components you actually need! Remove unnecessary and extra code easily just by excluding the path to specific SCSS, JS file.</p>
                          </li>
                          <li>
                              <p>
                                  It use PUG as template engine to generate pages and whole template quickly using node js. Save your time for doing the common changes for each page (i.e menu, branding and footer) by generating template with
                                  pug.
                              </p>
                          </li>
                      </ul>
                      <div class="code-box-copy">
                          <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                          <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
  &lt;p&gt;Getting start with your project custom requirements using a ready template which is quite difficult and time taking process, viho Admin provides useful features to kick start your project development with no efforts !&lt;/p&gt;
  &lt;ul&gt;
  &lt;li&gt;&lt;p&gt;viho Admin provides you getting start pages with different layouts, use the layout as per your custom requirements and just change the branding, menu & content.&lt;/p&gt;&lt;/li&gt;
  &lt;li&gt;&lt;p&gt;Every components in viho Admin are decoupled, it means use only components you actually need! Remove unnecessary and extra code easily just by excluding the path to specific SCSS, JS file.&lt;/p&gt;&lt;/li&gt;
  &lt;li&gt;&lt;p&gt;It use PUG as template engine to generate pages and whole template quickly using node js. Save your time for doing the common changes for each page (i.e menu, branding and footer) by generating template with pug.&lt;/p&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;!-- Cod Box Copy end --&gt;</code></pre>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-12">
              <div class="card">
                  <div class="card-header d-flex align-items-center justify-content-between">
                      <h5>What is starter kit ?</h5>
                      <div class="setting-list">
                          <ul class="list-unstyled setting-option">
                              <li>
                                  <div class="setting-white"><i class="icon-settings"></i></div>
                              </li>
                              <li><i class="view-html fa fa-code font-primary"></i></li>
                              <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                              <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                              <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                              <li><i class="icofont icofont-error close-card font-primary"> </i></li>
                          </ul>
                      </div>
                  </div>
                  <div class="card-body">
                      <p>Starter kit is a set of pages with different layouts, useful for your next project to start development process from scratch with no time.</p>
                      <ul>
                          <li>
                              <p>Each layout includes basic components only.</p>
                          </li>
                          <li>
                              <p>Select your choice of layout from starter kit, customize it with optional changes like colors and branding, add required dependency only.</p>
                          </li>
                          <li>
                              <p>Using template engine to generate whole template quickly with your selected layout and other custom changes.</p>
                          </li>
                      </ul>
                      <div class="code-box-copy">
                          <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                          <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
  &lt;p&gt;Starter kit is a set of pages with different layouts, useful for your next project to start development process from scratch with no time. &lt;/p&gt;
  &lt;ul&gt;
  &lt;li&gt;&lt;p&gt;Each layout includes basic components only.&lt;/p&gt;&lt;/li&gt;
  &lt;li&gt;&lt;p&gt;Select your choice of layout from starter kit, customize it with optional changes like colors and branding, add required dependency only.&lt;/p&gt;&lt;/li&gt;
  &lt;li&gt;&lt;p&gt;Using template engine to generate whole template quickly with your selected layout and other custom changes.&lt;/p&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;!-- Cod Box Copy end --&gt;</code></pre>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-12">
              <div class="card">
                  <div class="card-header d-flex align-items-center justify-content-between">
                      <h5>How to use starter kit ?</h5>
                      <div class="setting-list">
                          <ul class="list-unstyled setting-option">
                              <li>
                                  <div class="setting-white"><i class="icon-settings"></i></div>
                              </li>
                              <li><i class="view-html fa fa-code font-primary"></i></li>
                              <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                              <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                              <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                              <li><i class="icofont icofont-error close-card font-primary"> </i></li>
                          </ul>
                      </div>
                  </div>
                  <div class="card-body">
                      <p><span class="f-w-600">HTML</span></p>
                      <p>If you know just HTML, select your choice of layout from starter kit folder, customize it with optional changes like colors and branding, add required dependency only.</p>
                      <p><span class="f-w-600">PUG</span></p>
                      <p>
                          To use PUG it required node.js and basic knowledge of using it. Using PUG as template engine to generate whole template quickly with your selected layout and other custom changes. To getting start with PUG usage &
                          template generating process please refer template documentation.
                      </p>
                      <div class="alert alert-primary inverse" role="alert">
                          <i class="icon-info-alt"></i>
                          <h5>Tips!</h5>
                          <p>Hideable navbar option is available for fixed navbar with static navigation only. Works in top and bottom positions, single and multiple navbars.</p>
                      </div>
                      <div class="code-box-copy">
                          <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                          <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
  &lt;p&gt;&lt;span class="f-w-600"&gt;HTML&lt;/span&gt;&lt;/p&gt;
  &lt;p&gt;If you know just HTML, select your choice of layout from starter kit folder, customize it with optional changes like colors and branding, add required dependency only.&lt;/p&gt;
  &lt;p&gt;&lt;span class="f-w-600"&gt;PUG&lt;/span&gt;&lt;/p&gt;
  &lt;p&gt;To use PUG it required node.js and basic knowledge of using it. Using PUG as template engine to generate whole template quickly with your selected layout and other custom changes. To getting start with PUG usage & template generating process please refer template documentation.&lt;/p&gt;
  &lt;div class="alert alert-primary inverse" role="alert"&gt;
  &lt;i class="icon-info-alt"&gt;&lt;/i&gt;
  &lt;h5&gt;Tips!&lt;/h5&gt;
  &lt;p&gt;Hideable navbar option is available for fixed navbar with static navigation only. Works in top and bottom positions, single and multiple navbars.&lt;/p&gt;
  &lt;/div&gt;
  &lt;!-- Cod Box Copy end --&gt;</code></pre>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-12">
              <div class="card">
                  <div class="card-header">
                      <h5>Simple Card</h5>
                  </div>
                  <div class="card-body">
                      <h6>HTML Ipsum Presents</h6>
                      <p>
                          <strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet
                          quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>,
                          ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.
                      </p>
                      <h6>Header Level 2</h6>
                      <ol>
                          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                          <li>Aliquam tincidunt mauris eu risus.</li>
                      </ol>
                      <div class="figure d-block">
                          <blockquote class="blockquote">
                              <p>
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis,
                                  tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
                              </p>
                          </blockquote>
                      </div>
                      <h4>Header Level<span> 3</span></h4>
                      <ul>
                          <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                          <li>Aliquam tincidunt mauris eu risus.</li>
                      </ul>
                      <pre>
  #header h1 a {
    display: block;
    width: 300px;
    height: 80px;
  }
                      </pre>
                      <dl>
                          <dt>Definition list</dt>
                          <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd>
                          <dt>Lorem ipsum dolor sit amet</dt>
                          <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd>
                      </dl>
                  </div>
              </div>
          </div>
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header">
                      <h5>With Header</h5>
                  </div>
                  <div class="card-body">
                      <h5>Content title</h5>
                      <p>Add a heading to card with <code>.card-header</code> class</p>
                      <p>You may also include any &lt;h1&gt;-&lt;h6&gt; with a <code>.card-header </code> & <code>.card-title</code> class to add heading.</p>
                      <p>Jelly beans sugar plum cheesecake cookie oat cake soufflé. Tart lollipop carrot cake sugar plum. Marshmallow wafer tiramisu jelly beans.</p>
                  </div>
              </div>
          </div>
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header card-no-border">
                      <h5>With Header & No Border</h5>
                  </div>
                  <div class="card-body">
                      <h5>Content title</h5>
                      <p>Add a heading to card with <code>.card-header </code> class & without header border<code>.border-bottom-0</code> class.</p>
                      <p>You may also include any &lt;h1&gt;-&lt;h6&gt; with a <code>.card-header </code> & <code>.card-title</code> class to add heading.</p>
                      <p>Gingerbread brownie sweet roll cheesecake chocolate cake jelly beans marzipan gummies dessert. Jelly beans sugar plum cheesecake cookie oat cake soufflé.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>


  <script type="text/javascript">
      var body = document.body;
      body.classList.add("dark-only");
  </script>
  
  @push('scripts')
  <script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
  <script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
  <script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
  <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
  @endpush

@endsection