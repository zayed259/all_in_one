@extends('layouts/backend')

@section('title')
Socialite Package
@endsection

@section('content')

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <div class="d-flex align-items-end row">
                <div class="col-sm-12">
                    <div class="card-body">
                        <h2 class="card-title package-heading">Copy to Clipboard</h2>
                        <div class="divider divider-primary divider-dashed">
                            <!-- <div class="divider-text">Primary</div> -->
                            <div class="divider-text">
                                <i class="bx bx-star"></i>
                            </div>
                        </div>
                        <ul class="title-ul">
                            <li>
                                <a href="#introduction">Introduction</a>
                            </li>
                            <li>
                                <a href="#js">JavaScript</a>
                            </li>
                            <li>
                                <a href="#view">View</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="d-flex align-items-end row">
                <div class="col-sm-12">
                    <div class="card-body">
                        <div class="title-headline">
                            <h2 id="introduction"><a href="#introduction">Introduction</a></h2>
                            <p> Copy to clipboard is a javascript package that allows you to copy text to clipboard. It is a lightweight, easy-to-use, and no dependencies required.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="d-flex align-items-end row">
                <div class="col-sm-12">
                    <div class="card-body">
                        <div class="title-headline">
                            <h2 id="js"><a href="#js">JavaScript</a></h2>
                            <p>Copy to clipboard is a javascript package that allows you to copy text to clipboard. It is a lightweight, easy-to-use, and no dependencies required.</p>
                            <div class="code-box-copy d-flex flex-row align-items-center justify-content-between">
                                <pre>
================
<span class="text-success">public/assets/js/main.js</span>
================
<xmp>
$(document).ready(function () {
  $(".copyTextBtn").click(function () {
    console.time('time1');
    var temp = $("<input>");
    $("body").append(temp);
    temp.val($(this).siblings("pre").text()).select();
    document.execCommand("copy");
    temp.remove();
    console.timeEnd('time1');
    $('.tooltipTxt').html('Copied <i class=\'bx bx-check-double\'></i>');
    setTimeout(function () {
      $('.tooltipTxt').html('Copy <i class=\'bx bx-copy\'></i>');
    }, 1000);
  });
});
</xmp>
                                </pre>
                                <button class="copyTextBtn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<span class='tooltipTxt'>Copy <i class='bx bx-copy'></i></span>"><i class='bx bxs-copy bx-tada-hover'></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="d-flex align-items-end row">
                <div class="col-sm-12">
                    <div class="card-body">
                        <div class="title-headline">
                            <h2 id="view"><a href="#view">View</a></h2>
                            <p>Just add a button with class <code>copyTextBtn</code> and add the text to be copied in the <code>pre</code> tag.</p>
                            <div class="code-box-copy d-flex flex-row align-items-center justify-content-between">
                                <pre>
================
<span class="text-success">resources/views/documentation/copy_to_clipboard.blade.php</span>
================
<xmp>
<div class="code-box-copy d-flex flex-row align-items-center justify-content-between">
    <pre>composer require laravel/socialite</pre>
    <button class="copyTextBtn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<span class='tooltipTxt'>Copy <i class='bx bx-copy'></i></span>"><i class='bx bxs-copy bx-tada-hover'></i></button>
</div>
</xmp>
                                </pre>
                                <button class="copyTextBtn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<span class='tooltipTxt'>Copy <i class='bx bx-copy'></i></span>"><i class='bx bxs-copy bx-tada-hover'></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection