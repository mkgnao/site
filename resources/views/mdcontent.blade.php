<!-- BEGIN WRITERS -->
@extends('layouts.app')

@section('content')

    @inject('markdownService', 'App\Services\MarkdownService')

    <div class="Container">
        <div class="Grid Grid--guttersLg Grid--full med-Grid--fit">
            <div class="Grid-cell">
                <div class="writersList">
                    {!! $markdownService->get($mdname) !!}
                </div>
            </div>
        </div>
    </div>

    @endsection
            <!-- END WRITERS -->