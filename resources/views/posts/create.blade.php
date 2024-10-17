@extends('layouts.dashboardlayout')
@section('links')
@endsection
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Add Post</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Form</a></li>
                                <li class="breadcrumb-item active">Add Post</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center mb-0">
                                <div class="flex-grow-1">
                                    <h4 class="card-title">Textual Inputs</h4>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="form-check form-switch form-switch-md">
                                        <input class="form-check-input" type="checkbox" data-bs-toggle="collapse" 
                                        data-bs-target="#textualInputs">
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Text</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                        </div>
                                    </div><!-- end row -->
                                    <div class="mb-3 row">
                                        <label for="example-search-input" class="col-md-2 col-form-label">Search</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                                        </div>
                                    </div><!-- end row -->
                                    <div class="mb-3 row">
                                        <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                                        </div>
                                    </div><!-- end row -->
                                    <div class="mb-3 row">
                                        <label for="example-url-input" class="col-md-2 col-form-label">URL</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                                        </div>
                                    </div><!-- end row -->
                                    <div class="mb-3 row">
                                        <label for="example-tel-input" class="col-md-2 col-form-label">Telephone</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                                        </div>
                                    </div><!-- end row -->
                                    <div class="mb-3 row">
                                        <label for="example-password-input" class="col-md-2 col-form-label">Password</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="password" value="hunter2" id="example-password-input">
                                        </div>
                                    </div><!-- end row -->
                                    <div class="mb-3 row">
                                        <label for="example-number-input" class="col-md-2 col-form-label">Number</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" value="42" id="example-number-input">
                                        </div>
                                    </div><!-- end row -->
                                    <div class="mb-3 mb-lg-0 row">
                                        <label for="example-datetime-local-input" class="col-md-2 col-form-label">Date and time</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="datetime-local" value="2019-08-19T13:45:00" id="example-datetime-local-input">
                                        </div>
                                    </div><!-- end row -->
                                </div><!-- end col -->

                                
                            </div><!-- end row -->

                            <div class="collapse" id="textualInputs">
                                <div>
                                    <div class="btn btn-clipboard" data-clipboard-action="copy"
                                        data-clipboard-target="#clipboardTexualInputs"></div>
                                    <pre class="language-markup rounded position-relative"
                                        style="max-height: 270px;">
                                <code id="clipboardTexualInputs">&lt;div class=&quot;row&quot;&gt;
                                &lt;div class=&quot;col-xl-6&quot;&gt;
                                &lt;div class=&quot;mb-3 row&quot;&gt;
                                &lt;label for=&quot;example-text-input&quot; class=&quot;col-md-2 col-form-label&quot;&gt;Text&lt;/label&gt;
                                &lt;div class=&quot;col-md-10&quot;&gt;
                                    &lt;input class=&quot;form-control&quot; type=&quot;text&quot; value=&quot;Artisanal kale&quot; id=&quot;example-text-input&quot;&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;&lt;!-- end row --&gt;
                                &lt;div class=&quot;mb-3 row&quot;&gt;
                                &lt;label for=&quot;example-search-input&quot; class=&quot;col-md-2 col-form-label&quot;&gt;Search&lt;/label&gt;
                                &lt;div class=&quot;col-md-10&quot;&gt;
                                    &lt;input class=&quot;form-control&quot; type=&quot;search&quot; value=&quot;How do I shoot web&quot; id=&quot;example-search-input&quot;&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;&lt;!-- end row --&gt;
                                &lt;div class=&quot;mb-3 row&quot;&gt;
                                &lt;label for=&quot;example-email-input&quot; class=&quot;col-md-2 col-form-label&quot;&gt;Email&lt;/label&gt;
                                &lt;div class=&quot;col-md-10&quot;&gt;
                                    &lt;input class=&quot;form-control&quot; type=&quot;email&quot; value=&quot;bootstrap@example.com&quot; id=&quot;example-email-input&quot;&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;&lt;!-- end row --&gt;
                                &lt;div class=&quot;mb-3 row&quot;&gt;
                                &lt;label for=&quot;example-url-input&quot; class=&quot;col-md-2 col-form-label&quot;&gt;URL&lt;/label&gt;
                                &lt;div class=&quot;col-md-10&quot;&gt;
                                    &lt;input class=&quot;form-control&quot; type=&quot;url&quot; value=&quot;https://getbootstrap.com&quot; id=&quot;example-url-input&quot;&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;&lt;!-- end row --&gt;
                                &lt;div class=&quot;mb-3 row&quot;&gt;
                                &lt;label for=&quot;example-tel-input&quot; class=&quot;col-md-2 col-form-label&quot;&gt;Telephone&lt;/label&gt;
                                &lt;div class=&quot;col-md-10&quot;&gt;
                                    &lt;input class=&quot;form-control&quot; type=&quot;tel&quot; value=&quot;1-(555)-555-5555&quot; id=&quot;example-tel-input&quot;&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;&lt;!-- end row --&gt;
                                &lt;div class=&quot;mb-3 row&quot;&gt;
                                &lt;label for=&quot;example-password-input&quot; class=&quot;col-md-2 col-form-label&quot;&gt;Password&lt;/label&gt;
                                &lt;div class=&quot;col-md-10&quot;&gt;
                                    &lt;input class=&quot;form-control&quot; type=&quot;password&quot; value=&quot;hunter2&quot; id=&quot;example-password-input&quot;&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;&lt;!-- end row --&gt;
                                &lt;div class=&quot;mb-3 row&quot;&gt;
                                &lt;label for=&quot;example-number-input&quot; class=&quot;col-md-2 col-form-label&quot;&gt;Number&lt;/label&gt;
                                &lt;div class=&quot;col-md-10&quot;&gt;
                                    &lt;input class=&quot;form-control&quot; type=&quot;number&quot; value=&quot;42&quot; id=&quot;example-number-input&quot;&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;&lt;!-- end row --&gt;
                                &lt;div class=&quot;mb-3 mb-lg-0 row&quot;&gt;
                                &lt;label for=&quot;example-datetime-local-input&quot; class=&quot;col-md-2 col-form-label&quot;&gt;Date and time&lt;/label&gt;
                                &lt;div class=&quot;col-md-10&quot;&gt;
                                    &lt;input class=&quot;form-control&quot; type=&quot;datetime-local&quot; value=&quot;2019-08-19T13:45:00&quot; id=&quot;example-datetime-local-input&quot;&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;&lt;!-- end row --&gt;
                                &lt;/div&gt;&lt;!-- end col --&gt;

                                &lt;div class=&quot;col-xl-6&quot;&gt;
                                &lt;div class=&quot;row mb-3 mt-3 mt-xl-0&quot;&gt;
                                &lt;label for=&quot;example-date-input&quot; class=&quot;col-md-2 col-form-label&quot;&gt;Date&lt;/label&gt;
                                &lt;div class=&quot;col-md-10&quot;&gt;
                                    &lt;input class=&quot;form-control&quot; type=&quot;date&quot; value=&quot;2019-08-19&quot; id=&quot;example-date-input&quot;&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;&lt;!-- end row --&gt;
                                &lt;div class=&quot;row mb-3&quot;&gt;
                                &lt;label for=&quot;example-month-input&quot; class=&quot;col-md-2 col-form-label&quot;&gt;Month&lt;/label&gt;
                                &lt;div class=&quot;col-md-10&quot;&gt;
                                    &lt;input class=&quot;form-control&quot; type=&quot;month&quot; value=&quot;2019-08&quot; id=&quot;example-month-input&quot;&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;&lt;!-- end row --&gt;
                                &lt;div class=&quot;row mb-3&quot;&gt;
                                &lt;label for=&quot;example-week-input&quot; class=&quot;col-md-2 col-form-label&quot;&gt;Week&lt;/label&gt;
                                &lt;div class=&quot;col-md-10&quot;&gt;
                                    &lt;input class=&quot;form-control&quot; type=&quot;week&quot; value=&quot;2019-W33&quot; id=&quot;example-week-input&quot;&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;&lt;!-- end row --&gt;
                                &lt;div class=&quot;row mb-3&quot;&gt;
                                &lt;label for=&quot;example-time-input&quot; class=&quot;col-md-2 col-form-label&quot;&gt;Time&lt;/label&gt;
                                &lt;div class=&quot;col-md-10&quot;&gt;
                                    &lt;input class=&quot;form-control&quot; type=&quot;time&quot; value=&quot;13:45:00&quot; id=&quot;example-time-input&quot;&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;&lt;!-- end row --&gt;
                                &lt;div class=&quot;row mb-3&quot;&gt;
                                &lt;label for=&quot;example-color-input&quot; class=&quot;col-md-2 col-form-label&quot;&gt;Color picker&lt;/label&gt;
                                &lt;div class=&quot;col-md-10&quot;&gt;
                                    &lt;input type=&quot;color&quot; class=&quot;form-control form-control-color mw-100&quot; id=&quot;example-color-input&quot; value=&quot;#038edc&quot; title=&quot;Choose your color&quot;&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;&lt;!-- end row --&gt;
                                &lt;div class=&quot;row mb-3&quot;&gt;
                                &lt;label class=&quot;col-md-2 col-form-label&quot;&gt;Select&lt;/label&gt;
                                &lt;div class=&quot;col-md-10&quot;&gt;
                                    &lt;select class=&quot;form-select&quot;&gt;
                                        &lt;option&gt;Select&lt;/option&gt;
                                        &lt;option&gt;Large select&lt;/option&gt;
                                        &lt;option&gt;Small select&lt;/option&gt;
                                    &lt;/select&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;&lt;!-- end row --&gt;
                                &lt;div class=&quot;row&quot;&gt;
                                &lt;label for=&quot;exampleDataList&quot; class=&quot;col-md-2 col-form-label&quot;&gt;Datalists&lt;/label&gt;
                                &lt;div class=&quot;col-md-10&quot;&gt;
                                    &lt;input class=&quot;form-control&quot; list=&quot;datalistOptions&quot; id=&quot;exampleDataList&quot; placeholder=&quot;Type to search...&quot;&gt;
                                    &lt;datalist id=&quot;datalistOptions&quot;&gt;
                                        &lt;option value=&quot;San Francisco&quot;&gt;
                                        &lt;option value=&quot;New York&quot;&gt;
                                        &lt;option value=&quot;Seattle&quot;&gt;
                                        &lt;option value=&quot;Los Angeles&quot;&gt;
                                        &lt;option value=&quot;Chicago&quot;&gt;
                                    &lt;/datalist&gt;
                                &lt;/div&gt;
                                &lt;/div&gt;&lt;!-- end row --&gt;
                                &lt;/div&gt;&lt;!-- end col --&gt;
                                &lt;/div&gt;&lt;!-- end row --&gt;</code>
                                </pre>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Probic.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://pichforest.com/" target="_blank" class="text-reset">Pichforest</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end main content-->
@endsection
@section('js')
@endsection



        