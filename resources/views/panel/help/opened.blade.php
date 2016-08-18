@extends('layouts.panel')

@section('content')
    <div class="page-content container-fluid">
        <div class="example example-buttons" style="margin-top: -20px;">
            <div class="btn-group btn-group-justified">
                <div class="btn-group" role="group">
                    <a href="{{ url('panel/help/create') }}" type="button" class="btn btn-primary">
                        <i class="icon wb-chat-working" aria-hidden="true"></i>
                        <br>
                        <span class="text-uppercase hidden-xs">Задать вопрос</span>
                    </a>
                </div>

                <div class="btn-group" role="group">
                    <a href="{{ url('panel/help/opened') }}" type="button" class="btn btn-info">
                        <i class="icon wb-time" aria-hidden="true"></i>
                        <br>
                        <span class="text-uppercase hidden-xs">Отправленные вопросы</span>
                    </a>
                </div>

                <div class="btn-group" role="group">
                    <a href="{{ url('panel/help/archive') }}" type="button" class="btn btn-success">
                        <i class="icon wb-briefcase" aria-hidden="true"></i>
                        <br>
                        <span class="text-uppercase hidden-xs">Архив сообщений</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="panel" style="margin-bottom: 0px;">
            <div class="page-content tab-content page-content-table nav-tabs-animate">
                <div class="tab-pane animation-fade active" id="forum-newest" role="tabpanel">
                    <table class="table is-indent" style="margin-bottom: 0px;">
                        <tbody>
                        @foreach($tickets as $ticket)
                            <tr data-url="panel.tpl" data-toggle="slidePanel" onclick="Navigator.go('{{ url('panel/help/show') }}/{{ $ticket->id }}');">
                                <td class="pre-cell"></td>
                                <td class="cell-60 responsive-hide">
                                    <a class="avatar" href="javascript:void(0)">
                                        <img class="img-responsive" src="http://synapps-lab.fr/Medias/new.png" alt="...">
                                    </a>
                                </td>
                                <td>
                                    <div class="content">
                                        <div class="title">
                                            {{ $ticket->title }}
                                        </div>
                                        <div class="metas">
                                            <span class="started">{{ $ticket->created_at }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="suf-cell"></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection