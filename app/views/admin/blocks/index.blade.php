@extends('admin._layout.admin')

@section('content')   
    <div class="header-link-box">
        <div class="heading">DISPLAY BLOCKS</div>
        <div class="link">{{link_to_route('admin.blocks.create','Add a new Display Block')}}</div>
    </div>
    <style>
        .ticked
        {
            background:url('../images/template/tick.png');
            background-repeat:no-repeat;
            width:25px;
            height:25px;
            border:none; 
        }
        
        .unticked
        {
            background:url('../images/template/cross.png');
            background-repeat:no-repeat;
            width:25px;
            height:25px;
            border:none; 
        }
        
    </style>
        
        
    <div class="table-box">
        @if(count($blocks)>0)
        <table>
            <tr><th style="width:180px;">Block Name</th><th>Block Contents</th><th>Visable</th><th>Notice</th><th>Index</th></tr>
                @foreach($blocks as $block) 
                    <tr>
                        <td>{{link_to_route('admin.blocks.show',$block->block_title,$block->id)}}</td>
                        <td>{{$block->block_text}}</td>
                        <td style="text-align:center">
                        {{Form::model($block,array('route'=>array('admin.blocks.toggle_visable',$block->id),'method'=>'put'))}}
                        @if($block->block_active==1)
                            <?php $butt='ticked';?>
                        @else
                            <?php $butt='unticked';?>
                        @endif                    
                        {{Form::submit('',array('class'=>$butt)) }}
                        {{ Form::close() }}
                        </td>
                        
                        <td style="text-align:center">
                        {{Form::model($block,array('route'=>array('admin.blocks.toggle_notice',$block->id),'method'=>'put'))}}
                        @if($block->notice==1)
                            <?php $butt='ticked';?>
                        @else
                            <?php $butt='unticked';?>
                        @endif                    
                        {{Form::submit('',array('class'=>$butt)) }}
                        {{ Form::close() }}
                        </td>   

                        <td style="text-align:center">{{$block->block_index}}</td>

                        <td class="butcol">
                            {{link_to_route('admin.blocks.edit','Edit',array($block->id),array('class'=>'buttons'))}}
    
                            {{ Form::open(array('route'=>array('admin.blocks.destroy',$block->id), 'method'=>'delete','class'=>'del-butt-form')) }}
                            {{ Form::submit('Delete',array('class'=>'del-button')) }}
                            {{ Form::close() }}
                        </td>
                            
                    </tr>
                @endforeach
            </table>
        @else
            <h2>No Blocks found</h2>
        @endif
    </div>
@stop