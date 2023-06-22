<div>
    @section('content')

    <div class="card-header">
        Research | Research supervise
    </div>
    <div class="card-body">
        <div wire:id="Kyh8l5CIuDnDC5e6I1pt">
            <div class="row">
                <div class="col-md-3 offset-md-0">
                    Search student name: <input wire:model="search" type="text" class="my-1 form-control" placeholder="Enter name of student">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12 offset-sm-0">
                    <div class="table-responsive users-table">
                        <table class="table table-striped table-sm data-table">
                            <thead class="thead">
                                <tr>
                                    <th class="text-center">Research Data</th>
                                </tr>
                            </thead>
                            <tbody id="users-table">
                                <tr>
                                    <td>
                                        <div wire:id="gEp6s3k4dQO6X5BjFFLZ">
                                            <div class="row" wire:key="$research->id">
                                                <div class="col-md-12 offset-sm-0">
                                                    <div class="card">
                                                        <div class="card-header" wire:click="expand" style="cursor:grab">
                                                            <div class="row">
                                                                <div class="col-md-1 offset-sm-0">
                                                                    <h1 style="color:red;">1</h1>
                                                                </div>
                                                                <div class="col-md-11 offset-sm-0">
                                                                    <div wire:id="DclMMD9SqRQweYRz6xGG">
                                                                        <div wire:key="$research->id">
                                                                            <div class="row">
                                                                                <div class="col-md-5 border-right offset-sm-0">
                                                                                    <i>E0451.1504582</i> |
                                                                                    Elektronika Industri PTE
                                                                                    <br>
                                                                                    <b>Maulidya Ajeng Yulvia Wibowo</b>
                                                                                </div>
                                                                                <div class="col-md-4 offset-sm-0">
                                                                                    SK-1504582-1 |
                                                                                    <b>Pre-defense</b>
                                                                                    <br>
                                                                                    <i>Research is in progress</i>
                                                                                </div>
                                                                                <div class="col-md-3 text-right offset-sm-0">
                                                                                    <i>Click to fold/unfold</i> <i class="fa fa-arrow-circle-down fa-md" style="color:red;" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:DclMMD9SqRQweYRz6xGG -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12 offset-sm-0">
                                                                    <div wire:id="eBVTsneJf7hdhpvy5pPn">
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-sm-0">

                                                                                <a href="http://ee.upi.edu/arsys/storage/proposal/SK-1504582-1-proposal.pdf" target="blank"><b><u>Efektivitas Media Pembelajaran Berbasis Android Pada Mata Pelajaran Sistem Pneumatik </u></b></a>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-md-0">
                                                                                <div class="row">
                                                                                    <div class="col-md-8 border-right offset-md-0">
                                                                                        <div wire:id="FF14JLRrJTG36JZKooOJ">
                                                                                            <div class="row">
                                                                                                <div wire:click="supervise" style="cursor:pointer;" class="col-md-12 offset-md-0">
                                                                                                    <i class="fas fa-spinner"></i><b> Progress of Supervision</b>
                                                                                                    <i>
                                                                                                        Click to unfold/fold
                                                                                                    </i>
                                                                                                    <i class="fa fa-arrow-circle-down fa-sm" style="color:blue; cursor:pointer;" aria-hidden="true"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">JKR</i>
                                                                                                            <button wire:click="$emit('createSuperviseDiscussion', 1689)" class="btn btn-sm"><i class="fas fa-plus-circle"></i> Add Meeting</button>


                                                                                                            <a wire:click="bypassMeeting(1689)" style="cursor: pointer"><i class="fa fa-check fa-xs" style="color:green" aria-hidden="true"></i> bypass</a>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">DDW</i>
                                                                                                            &nbsp;



                                                                                                            <i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div wire:id="IWH31xce1oGdZI6fMgYi">


                                                                                                <!-- Modal -->
                                                                                                <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                                                <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">×</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <div>
                                                                                                                    <script>
                                                                                                                        window.setTimeout(function() {
                                                                                                                            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                                                $(this).remove();
                                                                                                                            });
                                                                                                                        }, 5000);
                                                                                                                    </script>

                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="supervisionTopic">Topic</label>
                                                                                                                                <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-check">
                                                                                                                                <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                                                <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12">
                                                                                                                        <div class="form-group" wire:ignore="">
                                                                                                                            <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage" style="display: none;"></textarea>
                                                                                                                            <div class="note-editor note-frame card">
                                                                                                                                <div class="note-dropzone">
                                                                                                                                    <div class="note-dropzone-message"></div>
                                                                                                                                </div>
                                                                                                                                <div class="note-toolbar card-header" role="toolbar">
                                                                                                                                    <div class="note-btn-group btn-group note-style">
                                                                                                                                        <div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" aria-label="Style" data-original-title="Style"><i class="note-icon-magic"></i></button>
                                                                                                                                            <div class="note-dropdown-menu dropdown-menu dropdown-style" role="list" aria-label="Style"><a class="dropdown-item" href="#" data-value="p" role="listitem" aria-label="p">
                                                                                                                                                    <p>Normal</p>
                                                                                                                                                </a><a class="dropdown-item" href="#" data-value="blockquote" role="listitem" aria-label="blockquote">
                                                                                                                                                    <blockquote class="blockquote">Blockquote</blockquote>
                                                                                                                                                </a><a class="dropdown-item" href="#" data-value="pre" role="listitem" aria-label="pre">
                                                                                                                                                    <pre>Code</pre>
                                                                                                                                                </a><a class="dropdown-item" href="#" data-value="h1" role="listitem" aria-label="h1">
                                                                                                                                                    <h1>Header 1</h1>
                                                                                                                                                </a><a class="dropdown-item" href="#" data-value="h2" role="listitem" aria-label="h2">
                                                                                                                                                    <h2>Header 2</h2>
                                                                                                                                                </a><a class="dropdown-item" href="#" data-value="h3" role="listitem" aria-label="h3">
                                                                                                                                                    <h3>Header 3</h3>
                                                                                                                                                </a><a class="dropdown-item" href="#" data-value="h4" role="listitem" aria-label="h4">
                                                                                                                                                    <h4>Header 4</h4>
                                                                                                                                                </a><a class="dropdown-item" href="#" data-value="h5" role="listitem" aria-label="h5">
                                                                                                                                                    <h5>Header 5</h5>
                                                                                                                                                </a><a class="dropdown-item" href="#" data-value="h6" role="listitem" aria-label="h6">
                                                                                                                                                    <h6>Header 6</h6>
                                                                                                                                                </a></div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="note-btn-group btn-group note-font"><button type="button" class="note-btn btn btn-light btn-sm note-btn-bold" tabindex="-1" title="" aria-label="Bold (CTRL+B)" data-original-title="Bold (CTRL+B)"><i class="note-icon-bold"></i></button><button type="button" class="note-btn btn btn-light btn-sm note-btn-underline" tabindex="-1" title="" aria-label="Underline (CTRL+U)" data-original-title="Underline (CTRL+U)"><i class="note-icon-underline"></i></button><button type="button" class="note-btn btn btn-light btn-sm note-btn-italic" tabindex="-1" title="" aria-label="Italic (CTRL+I)" data-original-title="Italic (CTRL+I)"><i class="note-icon-italic"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Remove Font Style (CTRL+\)" data-original-title="Remove Font Style (CTRL+\)"><i class="note-icon-eraser"></i></button></div>
                                                                                                                                    <div class="note-btn-group btn-group note-color">
                                                                                                                                        <div class="note-btn-group btn-group note-color note-color-all"><button type="button" class="note-btn btn btn-light btn-sm note-current-color-button" tabindex="-1" title="" aria-label="Recent Color" data-original-title="Recent Color" data-backcolor="#FFFF00" data-forecolor="#000000"><i class="note-icon-font note-recent-color" style="background-color: rgb(255, 255, 0); color: rgb(0, 0, 0);"></i></button><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" aria-label="More Color" data-original-title="More Color"></button>
                                                                                                                                            <div class="note-dropdown-menu dropdown-menu" role="list">
                                                                                                                                                <div class="note-palette">
                                                                                                                                                    <div class="note-palette-title">Background Color</div>
                                                                                                                                                    <div><button type="button" class="note-color-reset btn btn-light btn-default" data-event="backColor" data-value="transparent">Transparent</button></div>
                                                                                                                                                    <div class="note-holder" data-event="backColor"><!-- back colors -->
                                                                                                                                                        <div class="note-color-palette">
                                                                                                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000" data-event="backColor" data-value="#000000" title="" aria-label="Black" data-toggle="button" tabindex="-1" data-original-title="Black"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="backColor" data-value="#424242" title="" aria-label="Tundora" data-toggle="button" tabindex="-1" data-original-title="Tundora"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="backColor" data-value="#636363" title="" aria-label="Dove Gray" data-toggle="button" tabindex="-1" data-original-title="Dove Gray"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="backColor" data-value="#9C9C94" title="" aria-label="Star Dust" data-toggle="button" tabindex="-1" data-original-title="Star Dust"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="backColor" data-value="#CEC6CE" title="" aria-label="Pale Slate" data-toggle="button" tabindex="-1" data-original-title="Pale Slate"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="backColor" data-value="#EFEFEF" title="" aria-label="Gallery" data-toggle="button" tabindex="-1" data-original-title="Gallery"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="backColor" data-value="#F7F7F7" title="" aria-label="Alabaster" data-toggle="button" tabindex="-1" data-original-title="Alabaster"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="White" data-toggle="button" tabindex="-1" data-original-title="White"></button></div>
                                                                                                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="backColor" data-value="#FF0000" title="" aria-label="Red" data-toggle="button" tabindex="-1" data-original-title="Red"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="backColor" data-value="#FF9C00" title="" aria-label="Orange Peel" data-toggle="button" tabindex="-1" data-original-title="Orange Peel"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="backColor" data-value="#FFFF00" title="" aria-label="Yellow" data-toggle="button" tabindex="-1" data-original-title="Yellow"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="backColor" data-value="#00FF00" title="" aria-label="Green" data-toggle="button" tabindex="-1" data-original-title="Green"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="backColor" data-value="#00FFFF" title="" aria-label="Cyan" data-toggle="button" tabindex="-1" data-original-title="Cyan"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="backColor" data-value="#0000FF" title="" aria-label="Blue" data-toggle="button" tabindex="-1" data-original-title="Blue"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="backColor" data-value="#9C00FF" title="" aria-label="Electric Violet" data-toggle="button" tabindex="-1" data-original-title="Electric Violet"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="backColor" data-value="#FF00FF" title="" aria-label="Magenta" data-toggle="button" tabindex="-1" data-original-title="Magenta"></button></div>
                                                                                                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="backColor" data-value="#F7C6CE" title="" aria-label="Azalea" data-toggle="button" tabindex="-1" data-original-title="Azalea"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="backColor" data-value="#FFE7CE" title="" aria-label="Karry" data-toggle="button" tabindex="-1" data-original-title="Karry"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="backColor" data-value="#FFEFC6" title="" aria-label="Egg White" data-toggle="button" tabindex="-1" data-original-title="Egg White"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="backColor" data-value="#D6EFD6" title="" aria-label="Zanah" data-toggle="button" tabindex="-1" data-original-title="Zanah"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="backColor" data-value="#CEDEE7" title="" aria-label="Botticelli" data-toggle="button" tabindex="-1" data-original-title="Botticelli"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="backColor" data-value="#CEE7F7" title="" aria-label="Tropical Blue" data-toggle="button" tabindex="-1" data-original-title="Tropical Blue"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="backColor" data-value="#D6D6E7" title="" aria-label="Mischka" data-toggle="button" tabindex="-1" data-original-title="Mischka"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="backColor" data-value="#E7D6DE" title="" aria-label="Twilight" data-toggle="button" tabindex="-1" data-original-title="Twilight"></button></div>
                                                                                                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="backColor" data-value="#E79C9C" title="" aria-label="Tonys Pink" data-toggle="button" tabindex="-1" data-original-title="Tonys Pink"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="backColor" data-value="#FFC69C" title="" aria-label="Peach Orange" data-toggle="button" tabindex="-1" data-original-title="Peach Orange"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="backColor" data-value="#FFE79C" title="" aria-label="Cream Brulee" data-toggle="button" tabindex="-1" data-original-title="Cream Brulee"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="backColor" data-value="#B5D6A5" title="" aria-label="Sprout" data-toggle="button" tabindex="-1" data-original-title="Sprout"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="backColor" data-value="#A5C6CE" title="" aria-label="Casper" data-toggle="button" tabindex="-1" data-original-title="Casper"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="backColor" data-value="#9CC6EF" title="" aria-label="Perano" data-toggle="button" tabindex="-1" data-original-title="Perano"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="backColor" data-value="#B5A5D6" title="" aria-label="Cold Purple" data-toggle="button" tabindex="-1" data-original-title="Cold Purple"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="backColor" data-value="#D6A5BD" title="" aria-label="Careys Pink" data-toggle="button" tabindex="-1" data-original-title="Careys Pink"></button></div>
                                                                                                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363" data-event="backColor" data-value="#E76363" title="" aria-label="Mandy" data-toggle="button" tabindex="-1" data-original-title="Mandy"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="backColor" data-value="#F7AD6B" title="" aria-label="Rajah" data-toggle="button" tabindex="-1" data-original-title="Rajah"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="backColor" data-value="#FFD663" title="" aria-label="Dandelion" data-toggle="button" tabindex="-1" data-original-title="Dandelion"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="backColor" data-value="#94BD7B" title="" aria-label="Olivine" data-toggle="button" tabindex="-1" data-original-title="Olivine"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="backColor" data-value="#73A5AD" title="" aria-label="Gulf Stream" data-toggle="button" tabindex="-1" data-original-title="Gulf Stream"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="backColor" data-value="#6BADDE" title="" aria-label="Viking" data-toggle="button" tabindex="-1" data-original-title="Viking"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="backColor" data-value="#8C7BC6" title="" aria-label="Blue Marguerite" data-toggle="button" tabindex="-1" data-original-title="Blue Marguerite"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="backColor" data-value="#C67BA5" title="" aria-label="Puce" data-toggle="button" tabindex="-1" data-original-title="Puce"></button></div>
                                                                                                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="backColor" data-value="#CE0000" title="" aria-label="Guardsman Red" data-toggle="button" tabindex="-1" data-original-title="Guardsman Red"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="backColor" data-value="#E79439" title="" aria-label="Fire Bush" data-toggle="button" tabindex="-1" data-original-title="Fire Bush"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="backColor" data-value="#EFC631" title="" aria-label="Golden Dream" data-toggle="button" tabindex="-1" data-original-title="Golden Dream"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="backColor" data-value="#6BA54A" title="" aria-label="Chelsea Cucumber" data-toggle="button" tabindex="-1" data-original-title="Chelsea Cucumber"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="backColor" data-value="#4A7B8C" title="" aria-label="Smalt Blue" data-toggle="button" tabindex="-1" data-original-title="Smalt Blue"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="backColor" data-value="#3984C6" title="" aria-label="Boston Blue" data-toggle="button" tabindex="-1" data-original-title="Boston Blue"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="backColor" data-value="#634AA5" title="" aria-label="Butterfly Bush" data-toggle="button" tabindex="-1" data-original-title="Butterfly Bush"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="backColor" data-value="#A54A7B" title="" aria-label="Cadillac" data-toggle="button" tabindex="-1" data-original-title="Cadillac"></button></div>
                                                                                                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="backColor" data-value="#9C0000" title="" aria-label="Sangria" data-toggle="button" tabindex="-1" data-original-title="Sangria"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="backColor" data-value="#B56308" title="" aria-label="Mai Tai" data-toggle="button" tabindex="-1" data-original-title="Mai Tai"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="backColor" data-value="#BD9400" title="" aria-label="Buddha Gold" data-toggle="button" tabindex="-1" data-original-title="Buddha Gold"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="backColor" data-value="#397B21" title="" aria-label="Forest Green" data-toggle="button" tabindex="-1" data-original-title="Forest Green"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="backColor" data-value="#104A5A" title="" aria-label="Eden" data-toggle="button" tabindex="-1" data-original-title="Eden"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="backColor" data-value="#085294" title="" aria-label="Venice Blue" data-toggle="button" tabindex="-1" data-original-title="Venice Blue"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="backColor" data-value="#311873" title="" aria-label="Meteorite" data-toggle="button" tabindex="-1" data-original-title="Meteorite"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="backColor" data-value="#731842" title="" aria-label="Claret" data-toggle="button" tabindex="-1" data-original-title="Claret"></button></div>
                                                                                                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000" data-event="backColor" data-value="#630000" title="" aria-label="Rosewood" data-toggle="button" tabindex="-1" data-original-title="Rosewood"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="backColor" data-value="#7B3900" title="" aria-label="Cinnamon" data-toggle="button" tabindex="-1" data-original-title="Cinnamon"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="backColor" data-value="#846300" title="" aria-label="Olive" data-toggle="button" tabindex="-1" data-original-title="Olive"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="backColor" data-value="#295218" title="" aria-label="Parsley" data-toggle="button" tabindex="-1" data-original-title="Parsley"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="backColor" data-value="#083139" title="" aria-label="Tiber" data-toggle="button" tabindex="-1" data-original-title="Tiber"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="backColor" data-value="#003163" title="" aria-label="Midnight Blue" data-toggle="button" tabindex="-1" data-original-title="Midnight Blue"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="backColor" data-value="#21104A" title="" aria-label="Valentino" data-toggle="button" tabindex="-1" data-original-title="Valentino"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="backColor" data-value="#4A1031" title="" aria-label="Loulou" data-toggle="button" tabindex="-1" data-original-title="Loulou"></button></div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div><button type="button" class="note-color-select btn btn-light btn-default" data-event="openPalette" data-value="backColorPicker-16860305426461">Select</button><input type="color" id="backColorPicker-16860305426461" class="note-btn note-color-select-btn" value="#FFFF00" data-event="backColorPalette-16860305426461"></div>
                                                                                                                                                    <div class="note-holder-custom" id="backColorPalette-16860305426461" data-event="backColor">
                                                                                                                                                        <div class="note-color-palette">
                                                                                                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button></div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <div class="note-palette">
                                                                                                                                                    <div class="note-palette-title">Text Color</div>
                                                                                                                                                    <div><button type="button" class="note-color-reset btn btn-light btn-default" data-event="removeFormat" data-value="foreColor">Reset to default</button></div>
                                                                                                                                                    <div class="note-holder" data-event="foreColor"><!-- fore colors -->
                                                                                                                                                        <div class="note-color-palette">
                                                                                                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000" data-event="foreColor" data-value="#000000" title="" aria-label="Black" data-toggle="button" tabindex="-1" data-original-title="Black"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="foreColor" data-value="#424242" title="" aria-label="Tundora" data-toggle="button" tabindex="-1" data-original-title="Tundora"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="foreColor" data-value="#636363" title="" aria-label="Dove Gray" data-toggle="button" tabindex="-1" data-original-title="Dove Gray"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="foreColor" data-value="#9C9C94" title="" aria-label="Star Dust" data-toggle="button" tabindex="-1" data-original-title="Star Dust"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="foreColor" data-value="#CEC6CE" title="" aria-label="Pale Slate" data-toggle="button" tabindex="-1" data-original-title="Pale Slate"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="foreColor" data-value="#EFEFEF" title="" aria-label="Gallery" data-toggle="button" tabindex="-1" data-original-title="Gallery"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="foreColor" data-value="#F7F7F7" title="" aria-label="Alabaster" data-toggle="button" tabindex="-1" data-original-title="Alabaster"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="White" data-toggle="button" tabindex="-1" data-original-title="White"></button></div>
                                                                                                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="foreColor" data-value="#FF0000" title="" aria-label="Red" data-toggle="button" tabindex="-1" data-original-title="Red"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="foreColor" data-value="#FF9C00" title="" aria-label="Orange Peel" data-toggle="button" tabindex="-1" data-original-title="Orange Peel"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="foreColor" data-value="#FFFF00" title="" aria-label="Yellow" data-toggle="button" tabindex="-1" data-original-title="Yellow"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="foreColor" data-value="#00FF00" title="" aria-label="Green" data-toggle="button" tabindex="-1" data-original-title="Green"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="foreColor" data-value="#00FFFF" title="" aria-label="Cyan" data-toggle="button" tabindex="-1" data-original-title="Cyan"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="foreColor" data-value="#0000FF" title="" aria-label="Blue" data-toggle="button" tabindex="-1" data-original-title="Blue"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="foreColor" data-value="#9C00FF" title="" aria-label="Electric Violet" data-toggle="button" tabindex="-1" data-original-title="Electric Violet"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="foreColor" data-value="#FF00FF" title="" aria-label="Magenta" data-toggle="button" tabindex="-1" data-original-title="Magenta"></button></div>
                                                                                                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="foreColor" data-value="#F7C6CE" title="" aria-label="Azalea" data-toggle="button" tabindex="-1" data-original-title="Azalea"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="foreColor" data-value="#FFE7CE" title="" aria-label="Karry" data-toggle="button" tabindex="-1" data-original-title="Karry"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="foreColor" data-value="#FFEFC6" title="" aria-label="Egg White" data-toggle="button" tabindex="-1" data-original-title="Egg White"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="foreColor" data-value="#D6EFD6" title="" aria-label="Zanah" data-toggle="button" tabindex="-1" data-original-title="Zanah"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="foreColor" data-value="#CEDEE7" title="" aria-label="Botticelli" data-toggle="button" tabindex="-1" data-original-title="Botticelli"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="foreColor" data-value="#CEE7F7" title="" aria-label="Tropical Blue" data-toggle="button" tabindex="-1" data-original-title="Tropical Blue"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="foreColor" data-value="#D6D6E7" title="" aria-label="Mischka" data-toggle="button" tabindex="-1" data-original-title="Mischka"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="foreColor" data-value="#E7D6DE" title="" aria-label="Twilight" data-toggle="button" tabindex="-1" data-original-title="Twilight"></button></div>
                                                                                                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="foreColor" data-value="#E79C9C" title="" aria-label="Tonys Pink" data-toggle="button" tabindex="-1" data-original-title="Tonys Pink"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="foreColor" data-value="#FFC69C" title="" aria-label="Peach Orange" data-toggle="button" tabindex="-1" data-original-title="Peach Orange"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="foreColor" data-value="#FFE79C" title="" aria-label="Cream Brulee" data-toggle="button" tabindex="-1" data-original-title="Cream Brulee"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="foreColor" data-value="#B5D6A5" title="" aria-label="Sprout" data-toggle="button" tabindex="-1" data-original-title="Sprout"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="foreColor" data-value="#A5C6CE" title="" aria-label="Casper" data-toggle="button" tabindex="-1" data-original-title="Casper"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="foreColor" data-value="#9CC6EF" title="" aria-label="Perano" data-toggle="button" tabindex="-1" data-original-title="Perano"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="foreColor" data-value="#B5A5D6" title="" aria-label="Cold Purple" data-toggle="button" tabindex="-1" data-original-title="Cold Purple"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="foreColor" data-value="#D6A5BD" title="" aria-label="Careys Pink" data-toggle="button" tabindex="-1" data-original-title="Careys Pink"></button></div>
                                                                                                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363" data-event="foreColor" data-value="#E76363" title="" aria-label="Mandy" data-toggle="button" tabindex="-1" data-original-title="Mandy"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="foreColor" data-value="#F7AD6B" title="" aria-label="Rajah" data-toggle="button" tabindex="-1" data-original-title="Rajah"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="foreColor" data-value="#FFD663" title="" aria-label="Dandelion" data-toggle="button" tabindex="-1" data-original-title="Dandelion"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="foreColor" data-value="#94BD7B" title="" aria-label="Olivine" data-toggle="button" tabindex="-1" data-original-title="Olivine"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="foreColor" data-value="#73A5AD" title="" aria-label="Gulf Stream" data-toggle="button" tabindex="-1" data-original-title="Gulf Stream"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="foreColor" data-value="#6BADDE" title="" aria-label="Viking" data-toggle="button" tabindex="-1" data-original-title="Viking"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="foreColor" data-value="#8C7BC6" title="" aria-label="Blue Marguerite" data-toggle="button" tabindex="-1" data-original-title="Blue Marguerite"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="foreColor" data-value="#C67BA5" title="" aria-label="Puce" data-toggle="button" tabindex="-1" data-original-title="Puce"></button></div>
                                                                                                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="foreColor" data-value="#CE0000" title="" aria-label="Guardsman Red" data-toggle="button" tabindex="-1" data-original-title="Guardsman Red"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="foreColor" data-value="#E79439" title="" aria-label="Fire Bush" data-toggle="button" tabindex="-1" data-original-title="Fire Bush"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="foreColor" data-value="#EFC631" title="" aria-label="Golden Dream" data-toggle="button" tabindex="-1" data-original-title="Golden Dream"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="foreColor" data-value="#6BA54A" title="" aria-label="Chelsea Cucumber" data-toggle="button" tabindex="-1" data-original-title="Chelsea Cucumber"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="foreColor" data-value="#4A7B8C" title="" aria-label="Smalt Blue" data-toggle="button" tabindex="-1" data-original-title="Smalt Blue"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="foreColor" data-value="#3984C6" title="" aria-label="Boston Blue" data-toggle="button" tabindex="-1" data-original-title="Boston Blue"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="foreColor" data-value="#634AA5" title="" aria-label="Butterfly Bush" data-toggle="button" tabindex="-1" data-original-title="Butterfly Bush"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="foreColor" data-value="#A54A7B" title="" aria-label="Cadillac" data-toggle="button" tabindex="-1" data-original-title="Cadillac"></button></div>
                                                                                                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="foreColor" data-value="#9C0000" title="" aria-label="Sangria" data-toggle="button" tabindex="-1" data-original-title="Sangria"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="foreColor" data-value="#B56308" title="" aria-label="Mai Tai" data-toggle="button" tabindex="-1" data-original-title="Mai Tai"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="foreColor" data-value="#BD9400" title="" aria-label="Buddha Gold" data-toggle="button" tabindex="-1" data-original-title="Buddha Gold"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="foreColor" data-value="#397B21" title="" aria-label="Forest Green" data-toggle="button" tabindex="-1" data-original-title="Forest Green"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="foreColor" data-value="#104A5A" title="" aria-label="Eden" data-toggle="button" tabindex="-1" data-original-title="Eden"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="foreColor" data-value="#085294" title="" aria-label="Venice Blue" data-toggle="button" tabindex="-1" data-original-title="Venice Blue"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="foreColor" data-value="#311873" title="" aria-label="Meteorite" data-toggle="button" tabindex="-1" data-original-title="Meteorite"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="foreColor" data-value="#731842" title="" aria-label="Claret" data-toggle="button" tabindex="-1" data-original-title="Claret"></button></div>
                                                                                                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000" data-event="foreColor" data-value="#630000" title="" aria-label="Rosewood" data-toggle="button" tabindex="-1" data-original-title="Rosewood"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="foreColor" data-value="#7B3900" title="" aria-label="Cinnamon" data-toggle="button" tabindex="-1" data-original-title="Cinnamon"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="foreColor" data-value="#846300" title="" aria-label="Olive" data-toggle="button" tabindex="-1" data-original-title="Olive"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="foreColor" data-value="#295218" title="" aria-label="Parsley" data-toggle="button" tabindex="-1" data-original-title="Parsley"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="foreColor" data-value="#083139" title="" aria-label="Tiber" data-toggle="button" tabindex="-1" data-original-title="Tiber"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="foreColor" data-value="#003163" title="" aria-label="Midnight Blue" data-toggle="button" tabindex="-1" data-original-title="Midnight Blue"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="foreColor" data-value="#21104A" title="" aria-label="Valentino" data-toggle="button" tabindex="-1" data-original-title="Valentino"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="foreColor" data-value="#4A1031" title="" aria-label="Loulou" data-toggle="button" tabindex="-1" data-original-title="Loulou"></button></div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div><button type="button" class="note-color-select btn btn-light btn-default" data-event="openPalette" data-value="foreColorPicker-16860305426461">Select</button><input type="color" id="foreColorPicker-16860305426461" class="note-btn note-color-select-btn" value="#000000" data-event="foreColorPalette-16860305426461"></div>
                                                                                                                                                    <div class="note-holder-custom" id="foreColorPalette-16860305426461" data-event="foreColor">
                                                                                                                                                        <div class="note-color-palette">
                                                                                                                                                            <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button></div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="note-btn-group btn-group note-view"><button type="button" class="note-btn btn btn-light btn-sm btn-fullscreen note-codeview-keep" tabindex="-1" title="" aria-label="Full Screen" data-original-title="Full Screen"><i class="note-icon-arrows-alt"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Help" data-original-title="Help"><i class="note-icon-question"></i></button></div>
                                                                                                                                </div>
                                                                                                                                <div class="note-editing-area">
                                                                                                                                    <div class="note-handle">
                                                                                                                                        <div class="note-control-selection">
                                                                                                                                            <div class="note-control-selection-bg"></div>
                                                                                                                                            <div class="note-control-holder note-control-nw"></div>
                                                                                                                                            <div class="note-control-holder note-control-ne"></div>
                                                                                                                                            <div class="note-control-holder note-control-sw"></div>
                                                                                                                                            <div class="note-control-sizing note-control-se"></div>
                                                                                                                                            <div class="note-control-selection-info"></div>
                                                                                                                                        </div>
                                                                                                                                    </div><textarea class="note-codable" aria-multiline="true"></textarea>
                                                                                                                                    <div class="note-editable card-block" contenteditable="true" role="textbox" aria-multiline="true" spellcheck="true" autocorrect="true" style="height: 60px;">
                                                                                                                                        <p><br></p>
                                                                                                                                    </div>
                                                                                                                                </div><output class="note-status-output" role="status" aria-live="polite"></output>
                                                                                                                                <div class="note-statusbar" role="status">
                                                                                                                                    <div class="note-resizebar" aria-label="Resize">
                                                                                                                                        <div class="note-icon-bar"></div>
                                                                                                                                        <div class="note-icon-bar"></div>
                                                                                                                                        <div class="note-icon-bar"></div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="modal note-modal link-dialog" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Link">
                                                                                                                                    <div class="modal-dialog">
                                                                                                                                        <div class="modal-content">
                                                                                                                                            <div class="modal-header">
                                                                                                                                                <h4 class="modal-title">Insert Link</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>
                                                                                                                                            </div>
                                                                                                                                            <div class="modal-body">
                                                                                                                                                <div class="form-group note-form-group"><label for="note-dialog-link-txt-16860305426461" class="note-form-label">Text to display</label><input id="note-dialog-link-txt-16860305426461" class="note-link-text form-control note-form-control note-input" type="text"></div>
                                                                                                                                                <div class="form-group note-form-group"><label for="note-dialog-link-url-16860305426461" class="note-form-label">To what URL should this link go?</label><input id="note-dialog-link-url-16860305426461" class="note-link-url form-control note-form-control note-input" type="text" value="http://"></div>
                                                                                                                                                <div class="form-check sn-checkbox-open-in-new-window"><label class="form-check-label"><input type="checkbox" class="form-check-input" checked="" aria-label="Open in new window" aria-checked="true"> Open in new window</label></div>
                                                                                                                                                <div class="form-check sn-checkbox-use-protocol"><label class="form-check-label"><input type="checkbox" class="form-check-input" checked="" aria-label="Use default protocol" aria-checked="true"> Use default protocol</label></div>
                                                                                                                                            </div>
                                                                                                                                            <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-link-btn" value="Insert Link" disabled=""></div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="note-popover popover in note-link-popover bottom">
                                                                                                                                    <div class="arrow"></div>
                                                                                                                                    <div class="popover-content note-children-container"><span><a target="_blank"></a>&nbsp;</span>
                                                                                                                                        <div class="note-btn-group btn-group note-link"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Edit" data-original-title="Edit"><i class="note-icon-link"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Unlink" data-original-title="Unlink"><i class="note-icon-chain-broken"></i></button></div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="modal note-modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Image">
                                                                                                                                    <div class="modal-dialog">
                                                                                                                                        <div class="modal-content">
                                                                                                                                            <div class="modal-header">
                                                                                                                                                <h4 class="modal-title">Insert Image</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>
                                                                                                                                            </div>
                                                                                                                                            <div class="modal-body">
                                                                                                                                                <div class="form-group note-form-group note-group-select-from-files"><label for="note-dialog-image-file-16860305426461" class="note-form-label">Select from files</label><input id="note-dialog-image-file-16860305426461" class="note-image-input form-control-file note-form-control note-input" type="file" name="files" accept="image/*" multiple="multiple"></div>
                                                                                                                                                <div class="form-group note-group-image-url"><label for="note-dialog-image-url-16860305426461" class="note-form-label">Image URL</label><input id="note-dialog-image-url-16860305426461" class="note-image-url form-control note-form-control note-input" type="text"></div>
                                                                                                                                            </div>
                                                                                                                                            <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-image-btn" value="Insert Image" disabled=""></div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="note-popover popover in note-image-popover bottom">
                                                                                                                                    <div class="arrow"></div>
                                                                                                                                    <div class="popover-content note-children-container">
                                                                                                                                        <div class="note-btn-group btn-group note-resize"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Resize full" data-original-title="Resize full"><span class="note-fontsize-10">100%</span></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Resize half" data-original-title="Resize half"><span class="note-fontsize-10">50%</span></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Resize quarter" data-original-title="Resize quarter"><span class="note-fontsize-10">25%</span></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Original size" data-original-title="Original size"><i class="note-icon-rollback"></i></button></div>
                                                                                                                                        <div class="note-btn-group btn-group note-float"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Float Left" data-original-title="Float Left"><i class="note-icon-float-left"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Float Right" data-original-title="Float Right"><i class="note-icon-float-right"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Remove float" data-original-title="Remove float"><i class="note-icon-rollback"></i></button></div>
                                                                                                                                        <div class="note-btn-group btn-group note-remove"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Remove Image" data-original-title="Remove Image"><i class="note-icon-trash"></i></button></div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="note-popover popover in note-table-popover bottom">
                                                                                                                                    <div class="arrow"></div>
                                                                                                                                    <div class="popover-content note-children-container">
                                                                                                                                        <div class="note-btn-group btn-group note-add"><button type="button" class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title="" aria-label="Add row below" data-original-title="Add row below"><i class="note-icon-row-below"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title="" aria-label="Add row above" data-original-title="Add row above"><i class="note-icon-row-above"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title="" aria-label="Add column left" data-original-title="Add column left"><i class="note-icon-col-before"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title="" aria-label="Add column right" data-original-title="Add column right"><i class="note-icon-col-after"></i></button></div>
                                                                                                                                        <div class="note-btn-group btn-group note-delete"><button type="button" class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title="" aria-label="Delete row" data-original-title="Delete row"><i class="note-icon-row-remove"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title="" aria-label="Delete column" data-original-title="Delete column"><i class="note-icon-col-remove"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title="" aria-label="Delete table" data-original-title="Delete table"><i class="note-icon-trash"></i></button></div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="modal note-modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Video">
                                                                                                                                    <div class="modal-dialog">
                                                                                                                                        <div class="modal-content">
                                                                                                                                            <div class="modal-header">
                                                                                                                                                <h4 class="modal-title">Insert Video</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>
                                                                                                                                            </div>
                                                                                                                                            <div class="modal-body">
                                                                                                                                                <div class="form-group note-form-group row-fluid"><label for="note-dialog-video-url-16860305426461" class="note-form-label">Video URL <small class="text-muted">(YouTube, Google Drive, Vimeo, Vine, Instagram, DailyMotion, Youku, Peertube)</small></label><input id="note-dialog-video-url-16860305426461" class="note-video-url form-control note-form-control note-input" type="text"></div>
                                                                                                                                            </div>
                                                                                                                                            <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-video-btn" value="Insert Video" disabled=""></div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="modal note-modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Help">
                                                                                                                                    <div class="modal-dialog">
                                                                                                                                        <div class="modal-content">
                                                                                                                                            <div class="modal-header">
                                                                                                                                                <h4 class="modal-title">Help</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>
                                                                                                                                            </div>
                                                                                                                                            <div class="modal-body" style="max-height: 300px; overflow: scroll;">
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>ESC</kbd></label><span>Escape</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>ENTER</kbd></label><span>Insert Paragraph</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Z</kbd></label><span>Undo the last command</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Y</kbd></label><span>Redo the last command</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>TAB</kbd></label><span>Tab</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>SHIFT+TAB</kbd></label><span>Untab</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+B</kbd></label><span>Set a bold style</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+I</kbd></label><span>Set a italic style</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+U</kbd></label><span>Set a underline style</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+S</kbd></label><span>Set a strikethrough style</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+BACKSLASH</kbd></label><span>Clean a style</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+L</kbd></label><span>Set left align</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+E</kbd></label><span>Set center align</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+R</kbd></label><span>Set right align</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+J</kbd></label><span>Set full align</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM7</kbd></label><span>Toggle unordered list</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM8</kbd></label><span>Toggle ordered list</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+LEFTBRACKET</kbd></label><span>Outdent on current paragraph</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+RIGHTBRACKET</kbd></label><span>Indent on current paragraph</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM0</kbd></label><span>Change current block's format as a paragraph(P tag)</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM1</kbd></label><span>Change current block's format as H1</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM2</kbd></label><span>Change current block's format as H2</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM3</kbd></label><span>Change current block's format as H3</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM4</kbd></label><span>Change current block's format as H4</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM5</kbd></label><span>Change current block's format as H5</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM6</kbd></label><span>Change current block's format as H6</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+ENTER</kbd></label><span>Insert horizontal rule</span>
                                                                                                                                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+K</kbd></label><span>Show Link Dialog</span>
                                                                                                                                            </div>
                                                                                                                                            <div class="modal-footer">
                                                                                                                                                <p class="text-center"><a href="http://summernote.org/" target="_blank" rel="noopener noreferrer">Summernote 0.8.20</a> · <a href="https://github.com/summernote/summernote" target="_blank" rel="noopener noreferrer">Project</a> · <a href="https://github.com/summernote/summernote/issues" target="_blank" rel="noopener noreferrer">Issues</a></p>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 text-right">
                                                                                                                        <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <script>
                                                                                                    window.livewire.on('superviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('show');
                                                                                                    });
                                                                                                    window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('hide');
                                                                                                    });
                                                                                                    window.livewire.on('resetDiscussionMessage', () => {
                                                                                                        $("#discussionMessage").summernote('reset');
                                                                                                    });
                                                                                                    $('#discussionMessage').summernote({
                                                                                                        tabsize: 2,
                                                                                                        height: 60,
                                                                                                        toolbar: [
                                                                                                            ['style', ['style']],
                                                                                                            ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                                            ['color', ['color']],
                                                                                                            //['para', ['ul', 'ol', 'paragraph']],
                                                                                                            //['table', ['table']],
                                                                                                            //['insert', ['link', 'picture', 'video']],
                                                                                                            ['view', ['fullscreen', 'help']]
                                                                                                            //['view', ['fullscreen', 'codeview', 'help']]
                                                                                                        ],
                                                                                                        callbacks: {
                                                                                                            onChange: function(contents, $editable) {
                                                                                                                window.livewire.find('IWH31xce1oGdZI6fMgYi').set('discussionMessage', contents);
                                                                                                            }
                                                                                                        }
                                                                                                    });
                                                                                                </script>
                                                                                            </div>
                                                                                            <!-- Livewire Component wire-end:IWH31xce1oGdZI6fMgYi -->
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:FF14JLRrJTG36JZKooOJ -->
                                                                                    </div>
                                                                                    <div class="col-md-4 offset-md-0">
                                                                                        <div wire:id="unCwMD6MTguGAHnq24Jc">
                                                                                            <div wire:key="$research->id">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b> Approval of Defense</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:unCwMD6MTguGAHnq24Jc -->
                                                                                        <hr>
                                                                                        <div wire:id="RUltjYQOzhuKgwtqw16j">
                                                                                            <div wire:key="$research->id">
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b>Applied Event</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:RUltjYQOzhuKgwtqw16j -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div wire:id="DlgA6ETqT3z14V6MfPcz">


                                                                            <!-- Modal -->
                                                                            <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                <div class="modal-dialog modal-lg" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                            <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">×</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div>
                                                                                                <script>
                                                                                                    window.setTimeout(function() {
                                                                                                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                            $(this).remove();
                                                                                                        });
                                                                                                    }, 5000);
                                                                                                </script>

                                                                                            </div>
                                                                                            <div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <label for="supervisionTopic">Topic</label>
                                                                                                            <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-check">
                                                                                                            <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                            <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group" wire:ignore="">
                                                                                                        <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 text-right">
                                                                                                    <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <script>
                                                                                window.livewire.on('superviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('show');
                                                                                });
                                                                                window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('hide');
                                                                                });
                                                                                window.livewire.on('resetDiscussionMessage', () => {
                                                                                    $("#discussionMessage").summernote('reset');
                                                                                });
                                                                                $('#discussionMessage').summernote({
                                                                                    tabsize: 2,
                                                                                    height: 60,
                                                                                    toolbar: [
                                                                                        ['style', ['style']],
                                                                                        ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                        ['color', ['color']],
                                                                                        //['para', ['ul', 'ol', 'paragraph']],
                                                                                        //['table', ['table']],
                                                                                        //['insert', ['link', 'picture', 'video']],
                                                                                        ['view', ['fullscreen', 'help']]
                                                                                        //['view', ['fullscreen', 'codeview', 'help']]
                                                                                    ],
                                                                                    callbacks: {
                                                                                        onChange: function(contents, $editable) {
                                                                                            window.livewire.find('DlgA6ETqT3z14V6MfPcz').set('discussionMessage', contents);
                                                                                        }
                                                                                    }
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                        <!-- Livewire Component wire-end:DlgA6ETqT3z14V6MfPcz -->
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:eBVTsneJf7hdhpvy5pPn -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Livewire Component wire-end:gEp6s3k4dQO6X5BjFFLZ -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div wire:id="b6v9VHt2gCJ7qLkl3nJw">
                                            <div class="row" wire:key="$research->id">
                                                <div class="col-md-12 offset-sm-0">
                                                    <div class="card">
                                                        <div class="card-header" wire:click="expand" style="cursor:grab">
                                                            <div class="row">
                                                                <div class="col-md-1 offset-sm-0">
                                                                    <h1 style="color:red;">2</h1>
                                                                </div>
                                                                <div class="col-md-11 offset-sm-0">
                                                                    <div wire:id="Xute3PUpsqgQiIfTABoX">
                                                                        <div wire:key="$research->id">
                                                                            <div class="row">
                                                                                <div class="col-md-5 border-right offset-sm-0">
                                                                                    <i>E0451.1500284</i> |
                                                                                    Elektronika Industri PTE
                                                                                    <br>
                                                                                    <b>Irdham Kusuma</b>
                                                                                </div>
                                                                                <div class="col-md-4 offset-sm-0">
                                                                                    SK-1500284-3 |
                                                                                    <b>Pre-defense</b>
                                                                                    <br>
                                                                                    <i>Research is in progress</i>
                                                                                </div>
                                                                                <div class="col-md-3 text-right offset-sm-0">
                                                                                    <i>Click to fold/unfold</i> <i class="fa fa-arrow-circle-down fa-md" style="color:red;" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:Xute3PUpsqgQiIfTABoX -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12 offset-sm-0">
                                                                    <div wire:id="93E7r7FL2ccXsC6paA60">
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-sm-0">

                                                                                <b><u>
                                                                                        <p>Analisis Kelayakan Media Pembelajaran Boost Converter Pada Mata Kuliah Elektronika Daya</p>
                                                                                    </u></b>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-md-0">
                                                                                <div class="row">
                                                                                    <div class="col-md-8 border-right offset-md-0">
                                                                                        <div wire:id="bQevp3DfemdbxJNQJJTR">
                                                                                            <div class="row">
                                                                                                <div wire:click="supervise" style="cursor:pointer;" class="col-md-12 offset-md-0">
                                                                                                    <i class="fas fa-spinner"></i><b> Progress of Supervision</b>
                                                                                                    <i>
                                                                                                        Click to unfold/fold
                                                                                                    </i>
                                                                                                    <i class="fa fa-arrow-circle-down fa-sm" style="color:blue; cursor:pointer;" aria-hidden="true"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">JKR</i>
                                                                                                            <button wire:click="$emit('createSuperviseDiscussion', 2123)" class="btn btn-sm"><i class="fas fa-plus-circle"></i> Add Meeting</button>


                                                                                                            <a wire:click="bypassMeeting(2123)" style="cursor: pointer"><i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass</a>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">ERH</i>
                                                                                                            &nbsp;



                                                                                                            <i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div wire:id="icVhTmUZDhGvrVYWpok7">


                                                                                                <!-- Modal -->
                                                                                                <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                                                <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">×</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <div>
                                                                                                                    <script>
                                                                                                                        window.setTimeout(function() {
                                                                                                                            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                                                $(this).remove();
                                                                                                                            });
                                                                                                                        }, 5000);
                                                                                                                    </script>

                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="supervisionTopic">Topic</label>
                                                                                                                                <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-check">
                                                                                                                                <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                                                <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12">
                                                                                                                        <div class="form-group" wire:ignore="">
                                                                                                                            <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 text-right">
                                                                                                                        <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <script>
                                                                                                    window.livewire.on('superviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('show');
                                                                                                    });
                                                                                                    window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('hide');
                                                                                                    });
                                                                                                    window.livewire.on('resetDiscussionMessage', () => {
                                                                                                        $("#discussionMessage").summernote('reset');
                                                                                                    });
                                                                                                    $('#discussionMessage').summernote({
                                                                                                        tabsize: 2,
                                                                                                        height: 60,
                                                                                                        toolbar: [
                                                                                                            ['style', ['style']],
                                                                                                            ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                                            ['color', ['color']],
                                                                                                            //['para', ['ul', 'ol', 'paragraph']],
                                                                                                            //['table', ['table']],
                                                                                                            //['insert', ['link', 'picture', 'video']],
                                                                                                            ['view', ['fullscreen', 'help']]
                                                                                                            //['view', ['fullscreen', 'codeview', 'help']]
                                                                                                        ],
                                                                                                        callbacks: {
                                                                                                            onChange: function(contents, $editable) {
                                                                                                                window.livewire.find('icVhTmUZDhGvrVYWpok7').set('discussionMessage', contents);
                                                                                                            }
                                                                                                        }
                                                                                                    });
                                                                                                </script>
                                                                                            </div>
                                                                                            <!-- Livewire Component wire-end:icVhTmUZDhGvrVYWpok7 -->
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:bQevp3DfemdbxJNQJJTR -->
                                                                                    </div>
                                                                                    <div class="col-md-4 offset-md-0">
                                                                                        <div wire:id="IDU0mTb8kAl8xAuKAmbW">
                                                                                            <div wire:key="$research->id">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b> Approval of Defense</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:IDU0mTb8kAl8xAuKAmbW -->
                                                                                        <hr>
                                                                                        <div wire:id="O08boMBJotVU8yIDOSXq">
                                                                                            <div wire:key="$research->id">
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b>Applied Event</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:O08boMBJotVU8yIDOSXq -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div wire:id="FojZg21tee289P94wMgM">


                                                                            <!-- Modal -->
                                                                            <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                <div class="modal-dialog modal-lg" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                            <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">×</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div>
                                                                                                <script>
                                                                                                    window.setTimeout(function() {
                                                                                                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                            $(this).remove();
                                                                                                        });
                                                                                                    }, 5000);
                                                                                                </script>

                                                                                            </div>
                                                                                            <div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <label for="supervisionTopic">Topic</label>
                                                                                                            <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-check">
                                                                                                            <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                            <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group" wire:ignore="">
                                                                                                        <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 text-right">
                                                                                                    <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <script>
                                                                                window.livewire.on('superviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('show');
                                                                                });
                                                                                window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('hide');
                                                                                });
                                                                                window.livewire.on('resetDiscussionMessage', () => {
                                                                                    $("#discussionMessage").summernote('reset');
                                                                                });
                                                                                $('#discussionMessage').summernote({
                                                                                    tabsize: 2,
                                                                                    height: 60,
                                                                                    toolbar: [
                                                                                        ['style', ['style']],
                                                                                        ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                        ['color', ['color']],
                                                                                        //['para', ['ul', 'ol', 'paragraph']],
                                                                                        //['table', ['table']],
                                                                                        //['insert', ['link', 'picture', 'video']],
                                                                                        ['view', ['fullscreen', 'help']]
                                                                                        //['view', ['fullscreen', 'codeview', 'help']]
                                                                                    ],
                                                                                    callbacks: {
                                                                                        onChange: function(contents, $editable) {
                                                                                            window.livewire.find('FojZg21tee289P94wMgM').set('discussionMessage', contents);
                                                                                        }
                                                                                    }
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                        <!-- Livewire Component wire-end:FojZg21tee289P94wMgM -->
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:93E7r7FL2ccXsC6paA60 -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Livewire Component wire-end:b6v9VHt2gCJ7qLkl3nJw -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div wire:id="Xt7E92cBD3twwdtTYYw8">
                                            <div class="row" wire:key="$research->id">
                                                <div class="col-md-12 offset-sm-0">
                                                    <div class="card">
                                                        <div class="card-header" wire:click="expand" style="cursor:grab">
                                                            <div class="row">
                                                                <div class="col-md-1 offset-sm-0">
                                                                    <h1 style="color:red;">3</h1>
                                                                </div>
                                                                <div class="col-md-11 offset-sm-0">
                                                                    <div wire:id="Gr8kWRkNz5s0RMWcw3EH">
                                                                        <div wire:key="$research->id">
                                                                            <div class="row">
                                                                                <div class="col-md-5 border-right offset-sm-0">
                                                                                    <i>E0451.1607676</i> |
                                                                                    Elektronika Industri PTE
                                                                                    <br>
                                                                                    <b>Eris Rifaldi</b>
                                                                                </div>
                                                                                <div class="col-md-4 offset-sm-0">
                                                                                    SK-1607676-2 |
                                                                                    <b>Pre-defense</b>
                                                                                    <br>
                                                                                    <i>Research is in progress</i>
                                                                                </div>
                                                                                <div class="col-md-3 text-right offset-sm-0">
                                                                                    <i>Click to fold/unfold</i> <i class="fa fa-arrow-circle-down fa-md" style="color:red;" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:Gr8kWRkNz5s0RMWcw3EH -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12 offset-sm-0">
                                                                    <div wire:id="S7gnU4nniOu7lDWTLBJO">
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-sm-0">

                                                                                <a href="http://ee.upi.edu/arsys/storage/proposal/SK-1607676-2-proposal.pdf" target="blank"><b><u>Pengembangan Modul Pembelajaran Instalasi Penerangan Listrik Berbasis Smart Building Untuk Meningkatkan Hasil Belajar Siswa SMK Pasundan 2 Banjaran.</u></b></a>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-md-0">
                                                                                <div class="row">
                                                                                    <div class="col-md-8 border-right offset-md-0">
                                                                                        <div wire:id="IZRymH40fXAyIUGZbFEi">
                                                                                            <div class="row">
                                                                                                <div wire:click="supervise" style="cursor:pointer;" class="col-md-12 offset-md-0">
                                                                                                    <i class="fas fa-spinner"></i><b> Progress of Supervision</b>
                                                                                                    <i>
                                                                                                        Click to unfold/fold
                                                                                                    </i>
                                                                                                    <i class="fa fa-arrow-circle-down fa-sm" style="color:blue; cursor:pointer;" aria-hidden="true"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">YYS</i>
                                                                                                            &nbsp;



                                                                                                            <i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">JKR</i>
                                                                                                            <button wire:click="$emit('createSuperviseDiscussion', 1858)" class="btn btn-sm"><i class="fas fa-plus-circle"></i> Add Meeting</button>


                                                                                                            <a wire:click="bypassMeeting(1858)" style="cursor: pointer"><i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass</a>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div wire:id="c7f3NNknMasMgLBP1rW1">


                                                                                                <!-- Modal -->
                                                                                                <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                                                <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">×</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <div>
                                                                                                                    <script>
                                                                                                                        window.setTimeout(function() {
                                                                                                                            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                                                $(this).remove();
                                                                                                                            });
                                                                                                                        }, 5000);
                                                                                                                    </script>

                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="supervisionTopic">Topic</label>
                                                                                                                                <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-check">
                                                                                                                                <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                                                <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12">
                                                                                                                        <div class="form-group" wire:ignore="">
                                                                                                                            <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 text-right">
                                                                                                                        <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <script>
                                                                                                    window.livewire.on('superviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('show');
                                                                                                    });
                                                                                                    window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('hide');
                                                                                                    });
                                                                                                    window.livewire.on('resetDiscussionMessage', () => {
                                                                                                        $("#discussionMessage").summernote('reset');
                                                                                                    });
                                                                                                    $('#discussionMessage').summernote({
                                                                                                        tabsize: 2,
                                                                                                        height: 60,
                                                                                                        toolbar: [
                                                                                                            ['style', ['style']],
                                                                                                            ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                                            ['color', ['color']],
                                                                                                            //['para', ['ul', 'ol', 'paragraph']],
                                                                                                            //['table', ['table']],
                                                                                                            //['insert', ['link', 'picture', 'video']],
                                                                                                            ['view', ['fullscreen', 'help']]
                                                                                                            //['view', ['fullscreen', 'codeview', 'help']]
                                                                                                        ],
                                                                                                        callbacks: {
                                                                                                            onChange: function(contents, $editable) {
                                                                                                                window.livewire.find('c7f3NNknMasMgLBP1rW1').set('discussionMessage', contents);
                                                                                                            }
                                                                                                        }
                                                                                                    });
                                                                                                </script>
                                                                                            </div>
                                                                                            <!-- Livewire Component wire-end:c7f3NNknMasMgLBP1rW1 -->
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:IZRymH40fXAyIUGZbFEi -->
                                                                                    </div>
                                                                                    <div class="col-md-4 offset-md-0">
                                                                                        <div wire:id="67ITSQ0KDjw6eTAKlk97">
                                                                                            <div wire:key="$research->id">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b> Approval of Defense</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:67ITSQ0KDjw6eTAKlk97 -->
                                                                                        <hr>
                                                                                        <div wire:id="WeMFCoO7wt993IusZWj5">
                                                                                            <div wire:key="$research->id">
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b>Applied Event</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:WeMFCoO7wt993IusZWj5 -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div wire:id="TxJowA7D5ayzpqC1kalq">


                                                                            <!-- Modal -->
                                                                            <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                <div class="modal-dialog modal-lg" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                            <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">×</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div>
                                                                                                <script>
                                                                                                    window.setTimeout(function() {
                                                                                                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                            $(this).remove();
                                                                                                        });
                                                                                                    }, 5000);
                                                                                                </script>

                                                                                            </div>
                                                                                            <div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <label for="supervisionTopic">Topic</label>
                                                                                                            <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-check">
                                                                                                            <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                            <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group" wire:ignore="">
                                                                                                        <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 text-right">
                                                                                                    <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <script>
                                                                                window.livewire.on('superviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('show');
                                                                                });
                                                                                window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('hide');
                                                                                });
                                                                                window.livewire.on('resetDiscussionMessage', () => {
                                                                                    $("#discussionMessage").summernote('reset');
                                                                                });
                                                                                $('#discussionMessage').summernote({
                                                                                    tabsize: 2,
                                                                                    height: 60,
                                                                                    toolbar: [
                                                                                        ['style', ['style']],
                                                                                        ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                        ['color', ['color']],
                                                                                        //['para', ['ul', 'ol', 'paragraph']],
                                                                                        //['table', ['table']],
                                                                                        //['insert', ['link', 'picture', 'video']],
                                                                                        ['view', ['fullscreen', 'help']]
                                                                                        //['view', ['fullscreen', 'codeview', 'help']]
                                                                                    ],
                                                                                    callbacks: {
                                                                                        onChange: function(contents, $editable) {
                                                                                            window.livewire.find('TxJowA7D5ayzpqC1kalq').set('discussionMessage', contents);
                                                                                        }
                                                                                    }
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                        <!-- Livewire Component wire-end:TxJowA7D5ayzpqC1kalq -->
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:S7gnU4nniOu7lDWTLBJO -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Livewire Component wire-end:Xt7E92cBD3twwdtTYYw8 -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div wire:id="AD8UEZwTZwDPUbYd5H4g">
                                            <div class="row" wire:key="$research->id">
                                                <div class="col-md-12 offset-sm-0">
                                                    <div class="card">
                                                        <div class="card-header" wire:click="expand" style="cursor:grab">
                                                            <div class="row">
                                                                <div class="col-md-1 offset-sm-0">
                                                                    <h1 style="color:red;">4</h1>
                                                                </div>
                                                                <div class="col-md-11 offset-sm-0">
                                                                    <div wire:id="gVGNUoeZhrsgiTi5aHlg">
                                                                        <div wire:key="$research->id">
                                                                            <div class="row">
                                                                                <div class="col-md-5 border-right offset-sm-0">
                                                                                    <i>E0451.1703819</i> |
                                                                                    Elektronika Industri PTE
                                                                                    <br>
                                                                                    <b>Syifa Fajar Qolbi</b>
                                                                                </div>
                                                                                <div class="col-md-4 offset-sm-0">
                                                                                    SK-1703819-2 |
                                                                                    <b>Pre-defense</b>
                                                                                    <br>
                                                                                    <i>Research is in progress</i>
                                                                                </div>
                                                                                <div class="col-md-3 text-right offset-sm-0">
                                                                                    <i>Click to fold/unfold</i> <i class="fa fa-arrow-circle-down fa-md" style="color:red;" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:gVGNUoeZhrsgiTi5aHlg -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12 offset-sm-0">
                                                                    <div wire:id="Tihs2GZN0QGNzuiptSdT">
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-sm-0">

                                                                                <a href="http://ee.upi.edu/arsys/storage/proposal/SK-1703819-2-proposal.pdf" target="blank"><b><u>Penerapan Pembelajaran Student Facilitator and Explaining (SFAE) Berbasis E-Learning Menggunakan Model Pembelajaran Blended Learning Terhadap Hasil Belajar Siswa Pada Mata Pelajaran Pemrograman Mikroprosesor dan Mikrokontroler di SMK Negeri 6 Bandung.</u></b></a>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-md-0">
                                                                                <div class="row">
                                                                                    <div class="col-md-8 border-right offset-md-0">
                                                                                        <div wire:id="f3iM4O1pWFLeN3Bbenvs">
                                                                                            <div class="row">
                                                                                                <div wire:click="supervise" style="cursor:pointer;" class="col-md-12 offset-md-0">
                                                                                                    <i class="fas fa-spinner"></i><b> Progress of Supervision</b>
                                                                                                    <i>
                                                                                                        Click to unfold/fold
                                                                                                    </i>
                                                                                                    <i class="fa fa-arrow-circle-down fa-sm" style="color:blue; cursor:pointer;" aria-hidden="true"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">JKR</i>
                                                                                                            <button wire:click="$emit('createSuperviseDiscussion', 1698)" class="btn btn-sm"><i class="fas fa-plus-circle"></i> Add Meeting</button>


                                                                                                            <a wire:click="bypassMeeting(1698)" style="cursor: pointer"><i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass</a>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">ERH</i>
                                                                                                            &nbsp;



                                                                                                            <i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div wire:id="slWwT2eTy3ZR35uKXBik">


                                                                                                <!-- Modal -->
                                                                                                <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                                                <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">×</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <div>
                                                                                                                    <script>
                                                                                                                        window.setTimeout(function() {
                                                                                                                            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                                                $(this).remove();
                                                                                                                            });
                                                                                                                        }, 5000);
                                                                                                                    </script>

                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="supervisionTopic">Topic</label>
                                                                                                                                <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-check">
                                                                                                                                <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                                                <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12">
                                                                                                                        <div class="form-group" wire:ignore="">
                                                                                                                            <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 text-right">
                                                                                                                        <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <script>
                                                                                                    window.livewire.on('superviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('show');
                                                                                                    });
                                                                                                    window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('hide');
                                                                                                    });
                                                                                                    window.livewire.on('resetDiscussionMessage', () => {
                                                                                                        $("#discussionMessage").summernote('reset');
                                                                                                    });
                                                                                                    $('#discussionMessage').summernote({
                                                                                                        tabsize: 2,
                                                                                                        height: 60,
                                                                                                        toolbar: [
                                                                                                            ['style', ['style']],
                                                                                                            ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                                            ['color', ['color']],
                                                                                                            //['para', ['ul', 'ol', 'paragraph']],
                                                                                                            //['table', ['table']],
                                                                                                            //['insert', ['link', 'picture', 'video']],
                                                                                                            ['view', ['fullscreen', 'help']]
                                                                                                            //['view', ['fullscreen', 'codeview', 'help']]
                                                                                                        ],
                                                                                                        callbacks: {
                                                                                                            onChange: function(contents, $editable) {
                                                                                                                window.livewire.find('slWwT2eTy3ZR35uKXBik').set('discussionMessage', contents);
                                                                                                            }
                                                                                                        }
                                                                                                    });
                                                                                                </script>
                                                                                            </div>
                                                                                            <!-- Livewire Component wire-end:slWwT2eTy3ZR35uKXBik -->
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:f3iM4O1pWFLeN3Bbenvs -->
                                                                                    </div>
                                                                                    <div class="col-md-4 offset-md-0">
                                                                                        <div wire:id="7hLuZlu34fwlnreIUSSO">
                                                                                            <div wire:key="$research->id">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b> Approval of Defense</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:7hLuZlu34fwlnreIUSSO -->
                                                                                        <hr>
                                                                                        <div wire:id="nCs7hYcdHbJqN00DIOyP">
                                                                                            <div wire:key="$research->id">
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b>Applied Event</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:nCs7hYcdHbJqN00DIOyP -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div wire:id="3W2ovZSh1V0RrmgW6gkM">


                                                                            <!-- Modal -->
                                                                            <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                <div class="modal-dialog modal-lg" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                            <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">×</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div>
                                                                                                <script>
                                                                                                    window.setTimeout(function() {
                                                                                                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                            $(this).remove();
                                                                                                        });
                                                                                                    }, 5000);
                                                                                                </script>

                                                                                            </div>
                                                                                            <div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <label for="supervisionTopic">Topic</label>
                                                                                                            <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-check">
                                                                                                            <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                            <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group" wire:ignore="">
                                                                                                        <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 text-right">
                                                                                                    <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <script>
                                                                                window.livewire.on('superviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('show');
                                                                                });
                                                                                window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('hide');
                                                                                });
                                                                                window.livewire.on('resetDiscussionMessage', () => {
                                                                                    $("#discussionMessage").summernote('reset');
                                                                                });
                                                                                $('#discussionMessage').summernote({
                                                                                    tabsize: 2,
                                                                                    height: 60,
                                                                                    toolbar: [
                                                                                        ['style', ['style']],
                                                                                        ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                        ['color', ['color']],
                                                                                        //['para', ['ul', 'ol', 'paragraph']],
                                                                                        //['table', ['table']],
                                                                                        //['insert', ['link', 'picture', 'video']],
                                                                                        ['view', ['fullscreen', 'help']]
                                                                                        //['view', ['fullscreen', 'codeview', 'help']]
                                                                                    ],
                                                                                    callbacks: {
                                                                                        onChange: function(contents, $editable) {
                                                                                            window.livewire.find('3W2ovZSh1V0RrmgW6gkM').set('discussionMessage', contents);
                                                                                        }
                                                                                    }
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                        <!-- Livewire Component wire-end:3W2ovZSh1V0RrmgW6gkM -->
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:Tihs2GZN0QGNzuiptSdT -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Livewire Component wire-end:AD8UEZwTZwDPUbYd5H4g -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div wire:id="YwdBLN7RfLNj0tFjrfoO">
                                            <div class="row" wire:key="$research->id">
                                                <div class="col-md-12 offset-sm-0">
                                                    <div class="card">
                                                        <div class="card-header" wire:click="expand" style="cursor:grab">
                                                            <div class="row">
                                                                <div class="col-md-1 offset-sm-0">
                                                                    <h1 style="color:red;">5</h1>
                                                                </div>
                                                                <div class="col-md-11 offset-sm-0">
                                                                    <div wire:id="0MtGih9dmPoqUROMYip3">
                                                                        <div wire:key="$research->id">
                                                                            <div class="row">
                                                                                <div class="col-md-5 border-right offset-sm-0">
                                                                                    <i>E0451.1703961</i> |
                                                                                    Elektronika Industri PTE
                                                                                    <br>
                                                                                    <b>Wilda Asifa Salsabila</b>
                                                                                </div>
                                                                                <div class="col-md-4 offset-sm-0">
                                                                                    SK-1703961-4 |
                                                                                    <b>Pre-defense</b>
                                                                                    <br>
                                                                                    <i>Research is in progress</i>
                                                                                </div>
                                                                                <div class="col-md-3 text-right offset-sm-0">
                                                                                    <i>Click to fold/unfold</i> <i class="fa fa-arrow-circle-down fa-md" style="color:red;" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:0MtGih9dmPoqUROMYip3 -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12 offset-sm-0">
                                                                    <div wire:id="cIIJAshfWyw3NOTpwHaG">
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-sm-0">

                                                                                <a href="http://ee.upi.edu/arsys/storage/proposal/SK-1703961-4-Proposal.pdf" target="blank"><b><u>Penerapan Model Pembelajaran Problem Based Learning (PBL) berbasis Blended Learning
                                                                                            untuk Meningkatkan Partisipasi dan Keaktifan Siswa pada Mata Pelajaran Instalasi Motor
                                                                                            Listrik di SMK Negeri 1 Rancaekek</u></b></a>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-md-0">
                                                                                <div class="row">
                                                                                    <div class="col-md-8 border-right offset-md-0">
                                                                                        <div wire:id="HQg4DLEzdfMrPJ5HcApb">
                                                                                            <div class="row">
                                                                                                <div wire:click="supervise" style="cursor:pointer;" class="col-md-12 offset-md-0">
                                                                                                    <i class="fas fa-spinner"></i><b> Progress of Supervision</b>
                                                                                                    <i>
                                                                                                        Click to unfold/fold
                                                                                                    </i>
                                                                                                    <i class="fa fa-arrow-circle-down fa-sm" style="color:blue; cursor:pointer;" aria-hidden="true"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">JKR</i>
                                                                                                            <button wire:click="$emit('createSuperviseDiscussion', 1670)" class="btn btn-sm"><i class="fas fa-plus-circle"></i> Add Meeting</button>


                                                                                                            <a wire:click="bypassMeeting(1670)" style="cursor: pointer"><i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass</a>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">DDW</i>
                                                                                                            &nbsp;



                                                                                                            <i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div wire:id="NJgTW9omZGx5oQkfmUFI">


                                                                                                <!-- Modal -->
                                                                                                <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                                                <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">×</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <div>
                                                                                                                    <script>
                                                                                                                        window.setTimeout(function() {
                                                                                                                            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                                                $(this).remove();
                                                                                                                            });
                                                                                                                        }, 5000);
                                                                                                                    </script>

                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="supervisionTopic">Topic</label>
                                                                                                                                <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-check">
                                                                                                                                <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                                                <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12">
                                                                                                                        <div class="form-group" wire:ignore="">
                                                                                                                            <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 text-right">
                                                                                                                        <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <script>
                                                                                                    window.livewire.on('superviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('show');
                                                                                                    });
                                                                                                    window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('hide');
                                                                                                    });
                                                                                                    window.livewire.on('resetDiscussionMessage', () => {
                                                                                                        $("#discussionMessage").summernote('reset');
                                                                                                    });
                                                                                                    $('#discussionMessage').summernote({
                                                                                                        tabsize: 2,
                                                                                                        height: 60,
                                                                                                        toolbar: [
                                                                                                            ['style', ['style']],
                                                                                                            ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                                            ['color', ['color']],
                                                                                                            //['para', ['ul', 'ol', 'paragraph']],
                                                                                                            //['table', ['table']],
                                                                                                            //['insert', ['link', 'picture', 'video']],
                                                                                                            ['view', ['fullscreen', 'help']]
                                                                                                            //['view', ['fullscreen', 'codeview', 'help']]
                                                                                                        ],
                                                                                                        callbacks: {
                                                                                                            onChange: function(contents, $editable) {
                                                                                                                window.livewire.find('NJgTW9omZGx5oQkfmUFI').set('discussionMessage', contents);
                                                                                                            }
                                                                                                        }
                                                                                                    });
                                                                                                </script>
                                                                                            </div>
                                                                                            <!-- Livewire Component wire-end:NJgTW9omZGx5oQkfmUFI -->
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:HQg4DLEzdfMrPJ5HcApb -->
                                                                                    </div>
                                                                                    <div class="col-md-4 offset-md-0">
                                                                                        <div wire:id="fcQFVBG6SrDfuDYiDeiA">
                                                                                            <div wire:key="$research->id">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b> Approval of Defense</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:fcQFVBG6SrDfuDYiDeiA -->
                                                                                        <hr>
                                                                                        <div wire:id="1JNr4uctaGzBcyoTJ99H">
                                                                                            <div wire:key="$research->id">
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b>Applied Event</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:1JNr4uctaGzBcyoTJ99H -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div wire:id="sUIeEi3b6smcBPcZKvUr">


                                                                            <!-- Modal -->
                                                                            <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                <div class="modal-dialog modal-lg" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                            <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">×</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div>
                                                                                                <script>
                                                                                                    window.setTimeout(function() {
                                                                                                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                            $(this).remove();
                                                                                                        });
                                                                                                    }, 5000);
                                                                                                </script>

                                                                                            </div>
                                                                                            <div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <label for="supervisionTopic">Topic</label>
                                                                                                            <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-check">
                                                                                                            <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                            <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group" wire:ignore="">
                                                                                                        <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 text-right">
                                                                                                    <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <script>
                                                                                window.livewire.on('superviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('show');
                                                                                });
                                                                                window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('hide');
                                                                                });
                                                                                window.livewire.on('resetDiscussionMessage', () => {
                                                                                    $("#discussionMessage").summernote('reset');
                                                                                });
                                                                                $('#discussionMessage').summernote({
                                                                                    tabsize: 2,
                                                                                    height: 60,
                                                                                    toolbar: [
                                                                                        ['style', ['style']],
                                                                                        ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                        ['color', ['color']],
                                                                                        //['para', ['ul', 'ol', 'paragraph']],
                                                                                        //['table', ['table']],
                                                                                        //['insert', ['link', 'picture', 'video']],
                                                                                        ['view', ['fullscreen', 'help']]
                                                                                        //['view', ['fullscreen', 'codeview', 'help']]
                                                                                    ],
                                                                                    callbacks: {
                                                                                        onChange: function(contents, $editable) {
                                                                                            window.livewire.find('sUIeEi3b6smcBPcZKvUr').set('discussionMessage', contents);
                                                                                        }
                                                                                    }
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                        <!-- Livewire Component wire-end:sUIeEi3b6smcBPcZKvUr -->
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:cIIJAshfWyw3NOTpwHaG -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Livewire Component wire-end:YwdBLN7RfLNj0tFjrfoO -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div wire:id="HYkeQ3IAmHTaCV31z9E3">
                                            <div class="row" wire:key="$research->id">
                                                <div class="col-md-12 offset-sm-0">
                                                    <div class="card">
                                                        <div class="card-header" wire:click="expand" style="cursor:grab">
                                                            <div class="row">
                                                                <div class="col-md-1 offset-sm-0">
                                                                    <h1 style="color:red;">6</h1>
                                                                </div>
                                                                <div class="col-md-11 offset-sm-0">
                                                                    <div wire:id="kdRuss2lVf48pkAv39sZ">
                                                                        <div wire:key="$research->id">
                                                                            <div class="row">
                                                                                <div class="col-md-5 border-right offset-sm-0">
                                                                                    <i>E0451.1806028</i> |
                                                                                    Tenaga Elektrik PTE
                                                                                    <br>
                                                                                    <b>Panji Rusmawan</b>
                                                                                </div>
                                                                                <div class="col-md-4 offset-sm-0">
                                                                                    SK-1806028-1 |
                                                                                    <b>Pre-defense</b>
                                                                                    <br>
                                                                                    <i>Research is in progress</i>
                                                                                </div>
                                                                                <div class="col-md-3 text-right offset-sm-0">
                                                                                    <i>Click to fold/unfold</i> <i class="fa fa-arrow-circle-down fa-md" style="color:red;" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:kdRuss2lVf48pkAv39sZ -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12 offset-sm-0">
                                                                    <div wire:id="7GAHVi7y98cG9wYsFsZw">
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-sm-0">

                                                                                <b><u>Usaha, Persiapan, Pembekalan Karir dan Percepatan Kelulusan Sarjana Pendidikan Teknik Elektro Melalui Program Praktik Industri dan Magang</u></b>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-md-0">
                                                                                <div class="row">
                                                                                    <div class="col-md-8 border-right offset-md-0">
                                                                                        <div wire:id="Gk5k55lfg3RUKXq8f0Lk">
                                                                                            <div class="row">
                                                                                                <div wire:click="supervise" style="cursor:pointer;" class="col-md-12 offset-md-0">
                                                                                                    <i class="fas fa-spinner"></i><b> Progress of Supervision</b>
                                                                                                    <i>
                                                                                                        Click to unfold/fold
                                                                                                    </i>
                                                                                                    <i class="fa fa-arrow-circle-down fa-sm" style="color:blue; cursor:pointer;" aria-hidden="true"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">JKR</i>
                                                                                                            <button wire:click="$emit('createSuperviseDiscussion', 2291)" class="btn btn-sm"><i class="fas fa-plus-circle"></i> Add Meeting</button>


                                                                                                            <a wire:click="bypassMeeting(2291)" style="cursor: pointer"><i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass</a>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">MMS</i>
                                                                                                            &nbsp;



                                                                                                            <i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div wire:id="vVPQnVqD1DjeZPMYPPT8">


                                                                                                <!-- Modal -->
                                                                                                <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                                                <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">×</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <div>
                                                                                                                    <script>
                                                                                                                        window.setTimeout(function() {
                                                                                                                            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                                                $(this).remove();
                                                                                                                            });
                                                                                                                        }, 5000);
                                                                                                                    </script>

                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="supervisionTopic">Topic</label>
                                                                                                                                <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-check">
                                                                                                                                <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                                                <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12">
                                                                                                                        <div class="form-group" wire:ignore="">
                                                                                                                            <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 text-right">
                                                                                                                        <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <script>
                                                                                                    window.livewire.on('superviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('show');
                                                                                                    });
                                                                                                    window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('hide');
                                                                                                    });
                                                                                                    window.livewire.on('resetDiscussionMessage', () => {
                                                                                                        $("#discussionMessage").summernote('reset');
                                                                                                    });
                                                                                                    $('#discussionMessage').summernote({
                                                                                                        tabsize: 2,
                                                                                                        height: 60,
                                                                                                        toolbar: [
                                                                                                            ['style', ['style']],
                                                                                                            ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                                            ['color', ['color']],
                                                                                                            //['para', ['ul', 'ol', 'paragraph']],
                                                                                                            //['table', ['table']],
                                                                                                            //['insert', ['link', 'picture', 'video']],
                                                                                                            ['view', ['fullscreen', 'help']]
                                                                                                            //['view', ['fullscreen', 'codeview', 'help']]
                                                                                                        ],
                                                                                                        callbacks: {
                                                                                                            onChange: function(contents, $editable) {
                                                                                                                window.livewire.find('vVPQnVqD1DjeZPMYPPT8').set('discussionMessage', contents);
                                                                                                            }
                                                                                                        }
                                                                                                    });
                                                                                                </script>
                                                                                            </div>
                                                                                            <!-- Livewire Component wire-end:vVPQnVqD1DjeZPMYPPT8 -->
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:Gk5k55lfg3RUKXq8f0Lk -->
                                                                                    </div>
                                                                                    <div class="col-md-4 offset-md-0">
                                                                                        <div wire:id="pXEpOe9eRFrIitCAVSb9">
                                                                                            <div wire:key="$research->id">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b> Approval of Defense</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:pXEpOe9eRFrIitCAVSb9 -->
                                                                                        <hr>
                                                                                        <div wire:id="f9lrzDSATkTNcmIadAFF">
                                                                                            <div wire:key="$research->id">
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b>Applied Event</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:f9lrzDSATkTNcmIadAFF -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div wire:id="N9GhQ1pdVeghQWYZ5s1T">


                                                                            <!-- Modal -->
                                                                            <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                <div class="modal-dialog modal-lg" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                            <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">×</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div>
                                                                                                <script>
                                                                                                    window.setTimeout(function() {
                                                                                                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                            $(this).remove();
                                                                                                        });
                                                                                                    }, 5000);
                                                                                                </script>

                                                                                            </div>
                                                                                            <div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <label for="supervisionTopic">Topic</label>
                                                                                                            <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-check">
                                                                                                            <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                            <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group" wire:ignore="">
                                                                                                        <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 text-right">
                                                                                                    <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <script>
                                                                                window.livewire.on('superviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('show');
                                                                                });
                                                                                window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('hide');
                                                                                });
                                                                                window.livewire.on('resetDiscussionMessage', () => {
                                                                                    $("#discussionMessage").summernote('reset');
                                                                                });
                                                                                $('#discussionMessage').summernote({
                                                                                    tabsize: 2,
                                                                                    height: 60,
                                                                                    toolbar: [
                                                                                        ['style', ['style']],
                                                                                        ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                        ['color', ['color']],
                                                                                        //['para', ['ul', 'ol', 'paragraph']],
                                                                                        //['table', ['table']],
                                                                                        //['insert', ['link', 'picture', 'video']],
                                                                                        ['view', ['fullscreen', 'help']]
                                                                                        //['view', ['fullscreen', 'codeview', 'help']]
                                                                                    ],
                                                                                    callbacks: {
                                                                                        onChange: function(contents, $editable) {
                                                                                            window.livewire.find('N9GhQ1pdVeghQWYZ5s1T').set('discussionMessage', contents);
                                                                                        }
                                                                                    }
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                        <!-- Livewire Component wire-end:N9GhQ1pdVeghQWYZ5s1T -->
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:7GAHVi7y98cG9wYsFsZw -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Livewire Component wire-end:HYkeQ3IAmHTaCV31z9E3 -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div wire:id="9i5vrAwgp42mef5blGkE">
                                            <div class="row" wire:key="$research->id">
                                                <div class="col-md-12 offset-sm-0">
                                                    <div class="card">
                                                        <div class="card-header" wire:click="expand" style="cursor:grab">
                                                            <div class="row">
                                                                <div class="col-md-1 offset-sm-0">
                                                                    <h1 style="color:red;">7</h1>
                                                                </div>
                                                                <div class="col-md-11 offset-sm-0">
                                                                    <div wire:id="B1srXgCal1Y8WodrobEp">
                                                                        <div wire:key="$research->id">
                                                                            <div class="row">
                                                                                <div class="col-md-5 border-right offset-sm-0">
                                                                                    <i>E0451.1903521</i> |
                                                                                    Elektronika Industri PTE
                                                                                    <br>
                                                                                    <b>Videlva Aracelly Hartanto</b>
                                                                                </div>
                                                                                <div class="col-md-4 offset-sm-0">
                                                                                    SK-1903521-1 |
                                                                                    <b>Pre-defense</b>
                                                                                    <br>
                                                                                    <i>Research is in progress</i>
                                                                                </div>
                                                                                <div class="col-md-3 text-right offset-sm-0">
                                                                                    <i>Click to fold/unfold</i> <i class="fa fa-arrow-circle-down fa-md" style="color:red;" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:B1srXgCal1Y8WodrobEp -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12 offset-sm-0">
                                                                    <div wire:id="gJanZAFEd79Gavpi0VI2">
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-sm-0">

                                                                                <b><u>Efektivitas Penerapan Kurikulum Merdeka Dalam Meningkatkan Keterampilan Berpikir Siswa Pada Mata Pelajaran Dasar-Dasar Teknik Elektronika (DDTE)-TEDK Kelas X Di SMK Negeri 1 Cimahi</u></b>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-md-0">
                                                                                <div class="row">
                                                                                    <div class="col-md-8 border-right offset-md-0">
                                                                                        <div wire:id="5PfPbh8wp0CPI8WZ36SV">
                                                                                            <div class="row">
                                                                                                <div wire:click="supervise" style="cursor:pointer;" class="col-md-12 offset-md-0">
                                                                                                    <i class="fas fa-spinner"></i><b> Progress of Supervision</b>
                                                                                                    <i>
                                                                                                        Click to unfold/fold
                                                                                                    </i>
                                                                                                    <i class="fa fa-arrow-circle-down fa-sm" style="color:blue; cursor:pointer;" aria-hidden="true"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">JKR</i>
                                                                                                            <button wire:click="$emit('createSuperviseDiscussion', 2495)" class="btn btn-sm"><i class="fas fa-plus-circle"></i> Add Meeting</button>


                                                                                                            <a wire:click="bypassMeeting(2495)" style="cursor: pointer"><i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass</a>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">AIP</i>
                                                                                                            &nbsp;



                                                                                                            <i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div wire:id="yRj5WOl0EkvhAc0YgZdo">


                                                                                                <!-- Modal -->
                                                                                                <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                                                <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">×</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <div>
                                                                                                                    <script>
                                                                                                                        window.setTimeout(function() {
                                                                                                                            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                                                $(this).remove();
                                                                                                                            });
                                                                                                                        }, 5000);
                                                                                                                    </script>

                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="supervisionTopic">Topic</label>
                                                                                                                                <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-check">
                                                                                                                                <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                                                <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12">
                                                                                                                        <div class="form-group" wire:ignore="">
                                                                                                                            <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 text-right">
                                                                                                                        <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <script>
                                                                                                    window.livewire.on('superviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('show');
                                                                                                    });
                                                                                                    window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('hide');
                                                                                                    });
                                                                                                    window.livewire.on('resetDiscussionMessage', () => {
                                                                                                        $("#discussionMessage").summernote('reset');
                                                                                                    });
                                                                                                    $('#discussionMessage').summernote({
                                                                                                        tabsize: 2,
                                                                                                        height: 60,
                                                                                                        toolbar: [
                                                                                                            ['style', ['style']],
                                                                                                            ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                                            ['color', ['color']],
                                                                                                            //['para', ['ul', 'ol', 'paragraph']],
                                                                                                            //['table', ['table']],
                                                                                                            //['insert', ['link', 'picture', 'video']],
                                                                                                            ['view', ['fullscreen', 'help']]
                                                                                                            //['view', ['fullscreen', 'codeview', 'help']]
                                                                                                        ],
                                                                                                        callbacks: {
                                                                                                            onChange: function(contents, $editable) {
                                                                                                                window.livewire.find('yRj5WOl0EkvhAc0YgZdo').set('discussionMessage', contents);
                                                                                                            }
                                                                                                        }
                                                                                                    });
                                                                                                </script>
                                                                                            </div>
                                                                                            <!-- Livewire Component wire-end:yRj5WOl0EkvhAc0YgZdo -->
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:5PfPbh8wp0CPI8WZ36SV -->
                                                                                    </div>
                                                                                    <div class="col-md-4 offset-md-0">
                                                                                        <div wire:id="iKj9y90oorQSBX1saxyn">
                                                                                            <div wire:key="$research->id">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b> Approval of Defense</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:iKj9y90oorQSBX1saxyn -->
                                                                                        <hr>
                                                                                        <div wire:id="FKguJflO5xAqpWsgK3gT">
                                                                                            <div wire:key="$research->id">
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b>Applied Event</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:FKguJflO5xAqpWsgK3gT -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div wire:id="UlRJ6mwdWgDHDgfdbL7K">


                                                                            <!-- Modal -->
                                                                            <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                <div class="modal-dialog modal-lg" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                            <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">×</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div>
                                                                                                <script>
                                                                                                    window.setTimeout(function() {
                                                                                                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                            $(this).remove();
                                                                                                        });
                                                                                                    }, 5000);
                                                                                                </script>

                                                                                            </div>
                                                                                            <div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <label for="supervisionTopic">Topic</label>
                                                                                                            <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-check">
                                                                                                            <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                            <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group" wire:ignore="">
                                                                                                        <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 text-right">
                                                                                                    <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <script>
                                                                                window.livewire.on('superviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('show');
                                                                                });
                                                                                window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('hide');
                                                                                });
                                                                                window.livewire.on('resetDiscussionMessage', () => {
                                                                                    $("#discussionMessage").summernote('reset');
                                                                                });
                                                                                $('#discussionMessage').summernote({
                                                                                    tabsize: 2,
                                                                                    height: 60,
                                                                                    toolbar: [
                                                                                        ['style', ['style']],
                                                                                        ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                        ['color', ['color']],
                                                                                        //['para', ['ul', 'ol', 'paragraph']],
                                                                                        //['table', ['table']],
                                                                                        //['insert', ['link', 'picture', 'video']],
                                                                                        ['view', ['fullscreen', 'help']]
                                                                                        //['view', ['fullscreen', 'codeview', 'help']]
                                                                                    ],
                                                                                    callbacks: {
                                                                                        onChange: function(contents, $editable) {
                                                                                            window.livewire.find('UlRJ6mwdWgDHDgfdbL7K').set('discussionMessage', contents);
                                                                                        }
                                                                                    }
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                        <!-- Livewire Component wire-end:UlRJ6mwdWgDHDgfdbL7K -->
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:gJanZAFEd79Gavpi0VI2 -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Livewire Component wire-end:9i5vrAwgp42mef5blGkE -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div wire:id="wKVvwH3UM9YYeGEinPah">
                                            <div class="row" wire:key="$research->id">
                                                <div class="col-md-12 offset-sm-0">
                                                    <div class="card">
                                                        <div class="card-header" wire:click="expand" style="cursor:grab">
                                                            <div class="row">
                                                                <div class="col-md-1 offset-sm-0">
                                                                    <h1 style="color:red;">8</h1>
                                                                </div>
                                                                <div class="col-md-11 offset-sm-0">
                                                                    <div wire:id="gi8jtZlKFUPFqZIt7ig1">
                                                                        <div wire:key="$research->id">
                                                                            <div class="row">
                                                                                <div class="col-md-5 border-right offset-sm-0">
                                                                                    <i>E0451.1900044</i> |
                                                                                    Elektronika Industri PTE
                                                                                    <br>
                                                                                    <b>Diky Muhammad Rizki</b>
                                                                                </div>
                                                                                <div class="col-md-4 offset-sm-0">
                                                                                    SK-1900044-1 |
                                                                                    <b>Pre-defense</b>
                                                                                    <br>
                                                                                    <i>Research is in progress</i>
                                                                                </div>
                                                                                <div class="col-md-3 text-right offset-sm-0">
                                                                                    <i>Click to fold/unfold</i> <i class="fa fa-arrow-circle-down fa-md" style="color:red;" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:gi8jtZlKFUPFqZIt7ig1 -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12 offset-sm-0">
                                                                    <div wire:id="8Dr1FpdY27Q6UkamwFIh">
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-sm-0">

                                                                                <b><u>Implementasi Modul Pembelajaran Desain Sistem PLC – Pneumatik Menggunakan Aplikasi Automation Studio dalam Meningkatkan Critical Thinking dan Problem Solving Skill Berbasis STEM di SMKN 1 Cimahi.</u></b>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-md-0">
                                                                                <div class="row">
                                                                                    <div class="col-md-8 border-right offset-md-0">
                                                                                        <div wire:id="Mb2rZ0HuASYcLaZZQgg1">
                                                                                            <div class="row">
                                                                                                <div wire:click="supervise" style="cursor:pointer;" class="col-md-12 offset-md-0">
                                                                                                    <i class="fas fa-spinner"></i><b> Progress of Supervision</b>
                                                                                                    <i>
                                                                                                        Click to unfold/fold
                                                                                                    </i>
                                                                                                    <i class="fa fa-arrow-circle-down fa-sm" style="color:blue; cursor:pointer;" aria-hidden="true"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">JKR</i>
                                                                                                            <button wire:click="$emit('createSuperviseDiscussion', 2419)" class="btn btn-sm"><i class="fas fa-plus-circle"></i> Add Meeting</button>


                                                                                                            <a wire:click="bypassMeeting(2419)" style="cursor: pointer"><i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass</a>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">MAQ</i>
                                                                                                            &nbsp;



                                                                                                            <i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div wire:id="MbwSl0KMYjh0M3cOBmOj">


                                                                                                <!-- Modal -->
                                                                                                <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                                                <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">×</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <div>
                                                                                                                    <script>
                                                                                                                        window.setTimeout(function() {
                                                                                                                            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                                                $(this).remove();
                                                                                                                            });
                                                                                                                        }, 5000);
                                                                                                                    </script>

                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="supervisionTopic">Topic</label>
                                                                                                                                <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-check">
                                                                                                                                <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                                                <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12">
                                                                                                                        <div class="form-group" wire:ignore="">
                                                                                                                            <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 text-right">
                                                                                                                        <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <script>
                                                                                                    window.livewire.on('superviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('show');
                                                                                                    });
                                                                                                    window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('hide');
                                                                                                    });
                                                                                                    window.livewire.on('resetDiscussionMessage', () => {
                                                                                                        $("#discussionMessage").summernote('reset');
                                                                                                    });
                                                                                                    $('#discussionMessage').summernote({
                                                                                                        tabsize: 2,
                                                                                                        height: 60,
                                                                                                        toolbar: [
                                                                                                            ['style', ['style']],
                                                                                                            ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                                            ['color', ['color']],
                                                                                                            //['para', ['ul', 'ol', 'paragraph']],
                                                                                                            //['table', ['table']],
                                                                                                            //['insert', ['link', 'picture', 'video']],
                                                                                                            ['view', ['fullscreen', 'help']]
                                                                                                            //['view', ['fullscreen', 'codeview', 'help']]
                                                                                                        ],
                                                                                                        callbacks: {
                                                                                                            onChange: function(contents, $editable) {
                                                                                                                window.livewire.find('MbwSl0KMYjh0M3cOBmOj').set('discussionMessage', contents);
                                                                                                            }
                                                                                                        }
                                                                                                    });
                                                                                                </script>
                                                                                            </div>
                                                                                            <!-- Livewire Component wire-end:MbwSl0KMYjh0M3cOBmOj -->
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:Mb2rZ0HuASYcLaZZQgg1 -->
                                                                                    </div>
                                                                                    <div class="col-md-4 offset-md-0">
                                                                                        <div wire:id="EdEDm1lLqn6mpEUeMsO0">
                                                                                            <div wire:key="$research->id">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b> Approval of Defense</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:EdEDm1lLqn6mpEUeMsO0 -->
                                                                                        <hr>
                                                                                        <div wire:id="ggJY3Ii86wKvhQurUUg8">
                                                                                            <div wire:key="$research->id">
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b>Applied Event</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:ggJY3Ii86wKvhQurUUg8 -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div wire:id="oBWQw0JOZFhSuGbrNlKM">


                                                                            <!-- Modal -->
                                                                            <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                <div class="modal-dialog modal-lg" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                            <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">×</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div>
                                                                                                <script>
                                                                                                    window.setTimeout(function() {
                                                                                                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                            $(this).remove();
                                                                                                        });
                                                                                                    }, 5000);
                                                                                                </script>

                                                                                            </div>
                                                                                            <div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <label for="supervisionTopic">Topic</label>
                                                                                                            <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-check">
                                                                                                            <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                            <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group" wire:ignore="">
                                                                                                        <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 text-right">
                                                                                                    <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <script>
                                                                                window.livewire.on('superviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('show');
                                                                                });
                                                                                window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('hide');
                                                                                });
                                                                                window.livewire.on('resetDiscussionMessage', () => {
                                                                                    $("#discussionMessage").summernote('reset');
                                                                                });
                                                                                $('#discussionMessage').summernote({
                                                                                    tabsize: 2,
                                                                                    height: 60,
                                                                                    toolbar: [
                                                                                        ['style', ['style']],
                                                                                        ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                        ['color', ['color']],
                                                                                        //['para', ['ul', 'ol', 'paragraph']],
                                                                                        //['table', ['table']],
                                                                                        //['insert', ['link', 'picture', 'video']],
                                                                                        ['view', ['fullscreen', 'help']]
                                                                                        //['view', ['fullscreen', 'codeview', 'help']]
                                                                                    ],
                                                                                    callbacks: {
                                                                                        onChange: function(contents, $editable) {
                                                                                            window.livewire.find('oBWQw0JOZFhSuGbrNlKM').set('discussionMessage', contents);
                                                                                        }
                                                                                    }
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                        <!-- Livewire Component wire-end:oBWQw0JOZFhSuGbrNlKM -->
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:8Dr1FpdY27Q6UkamwFIh -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Livewire Component wire-end:wKVvwH3UM9YYeGEinPah -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div wire:id="g1XQidHXmr5vGxUTX24r">
                                            <div class="row" wire:key="$research->id">
                                                <div class="col-md-12 offset-sm-0">
                                                    <div class="card">
                                                        <div class="card-header" wire:click="expand" style="cursor:grab">
                                                            <div class="row">
                                                                <div class="col-md-1 offset-sm-0">
                                                                    <h1 style="color:red;">9</h1>
                                                                </div>
                                                                <div class="col-md-11 offset-sm-0">
                                                                    <div wire:id="DOMj5hYV8XyDGfxMWfxT">
                                                                        <div wire:key="$research->id">
                                                                            <div class="row">
                                                                                <div class="col-md-5 border-right offset-sm-0">
                                                                                    <i>E0451.1902199</i> |
                                                                                    Elektronika Industri PTE
                                                                                    <br>
                                                                                    <b>Didin Hardian</b>
                                                                                </div>
                                                                                <div class="col-md-4 offset-sm-0">
                                                                                    SK-1902199-1 |
                                                                                    <b>Pre-defense</b>
                                                                                    <br>
                                                                                    <i>Research is in progress</i>
                                                                                </div>
                                                                                <div class="col-md-3 text-right offset-sm-0">
                                                                                    <i>Click to fold/unfold</i> <i class="fa fa-arrow-circle-down fa-md" style="color:red;" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:DOMj5hYV8XyDGfxMWfxT -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12 offset-sm-0">
                                                                    <div wire:id="sG80LJruGBOoXkSMtjSJ">
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-sm-0">

                                                                                <b><u>Implementasi STEM dengan menggunakan Kit Arduino dan 4D Frame Mechatronics dalam meningkatkan motivasi belajar Siswa Sekolah Menengah di Jawa Barat</u></b>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-md-0">
                                                                                <div class="row">
                                                                                    <div class="col-md-8 border-right offset-md-0">
                                                                                        <div wire:id="MfYbO875LEQmXGaMVEET">
                                                                                            <div class="row">
                                                                                                <div wire:click="supervise" style="cursor:pointer;" class="col-md-12 offset-md-0">
                                                                                                    <i class="fas fa-spinner"></i><b> Progress of Supervision</b>
                                                                                                    <i>
                                                                                                        Click to unfold/fold
                                                                                                    </i>
                                                                                                    <i class="fa fa-arrow-circle-down fa-sm" style="color:blue; cursor:pointer;" aria-hidden="true"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">JKR</i>
                                                                                                            <button wire:click="$emit('createSuperviseDiscussion', 2399)" class="btn btn-sm"><i class="fas fa-plus-circle"></i> Add Meeting</button>


                                                                                                            <a wire:click="bypassMeeting(2399)" style="cursor: pointer"><i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass</a>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">REP</i>
                                                                                                            &nbsp;



                                                                                                            <i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div wire:id="1UtbizgUJOprauQuoenW">


                                                                                                <!-- Modal -->
                                                                                                <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                                                <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">×</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <div>
                                                                                                                    <script>
                                                                                                                        window.setTimeout(function() {
                                                                                                                            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                                                $(this).remove();
                                                                                                                            });
                                                                                                                        }, 5000);
                                                                                                                    </script>

                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="supervisionTopic">Topic</label>
                                                                                                                                <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-check">
                                                                                                                                <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                                                <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12">
                                                                                                                        <div class="form-group" wire:ignore="">
                                                                                                                            <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 text-right">
                                                                                                                        <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <script>
                                                                                                    window.livewire.on('superviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('show');
                                                                                                    });
                                                                                                    window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('hide');
                                                                                                    });
                                                                                                    window.livewire.on('resetDiscussionMessage', () => {
                                                                                                        $("#discussionMessage").summernote('reset');
                                                                                                    });
                                                                                                    $('#discussionMessage').summernote({
                                                                                                        tabsize: 2,
                                                                                                        height: 60,
                                                                                                        toolbar: [
                                                                                                            ['style', ['style']],
                                                                                                            ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                                            ['color', ['color']],
                                                                                                            //['para', ['ul', 'ol', 'paragraph']],
                                                                                                            //['table', ['table']],
                                                                                                            //['insert', ['link', 'picture', 'video']],
                                                                                                            ['view', ['fullscreen', 'help']]
                                                                                                            //['view', ['fullscreen', 'codeview', 'help']]
                                                                                                        ],
                                                                                                        callbacks: {
                                                                                                            onChange: function(contents, $editable) {
                                                                                                                window.livewire.find('1UtbizgUJOprauQuoenW').set('discussionMessage', contents);
                                                                                                            }
                                                                                                        }
                                                                                                    });
                                                                                                </script>
                                                                                            </div>
                                                                                            <!-- Livewire Component wire-end:1UtbizgUJOprauQuoenW -->
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:MfYbO875LEQmXGaMVEET -->
                                                                                    </div>
                                                                                    <div class="col-md-4 offset-md-0">
                                                                                        <div wire:id="ZbGl4WJdjKJARdy3P0pV">
                                                                                            <div wire:key="$research->id">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b> Approval of Defense</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:ZbGl4WJdjKJARdy3P0pV -->
                                                                                        <hr>
                                                                                        <div wire:id="gs6l58zIqA6PpgjAX4BH">
                                                                                            <div wire:key="$research->id">
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b>Applied Event</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:gs6l58zIqA6PpgjAX4BH -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div wire:id="ttJOaWTfqGzX7mWw3Sig">


                                                                            <!-- Modal -->
                                                                            <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                <div class="modal-dialog modal-lg" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                            <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">×</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div>
                                                                                                <script>
                                                                                                    window.setTimeout(function() {
                                                                                                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                            $(this).remove();
                                                                                                        });
                                                                                                    }, 5000);
                                                                                                </script>

                                                                                            </div>
                                                                                            <div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <label for="supervisionTopic">Topic</label>
                                                                                                            <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-check">
                                                                                                            <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                            <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group" wire:ignore="">
                                                                                                        <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 text-right">
                                                                                                    <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <script>
                                                                                window.livewire.on('superviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('show');
                                                                                });
                                                                                window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('hide');
                                                                                });
                                                                                window.livewire.on('resetDiscussionMessage', () => {
                                                                                    $("#discussionMessage").summernote('reset');
                                                                                });
                                                                                $('#discussionMessage').summernote({
                                                                                    tabsize: 2,
                                                                                    height: 60,
                                                                                    toolbar: [
                                                                                        ['style', ['style']],
                                                                                        ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                        ['color', ['color']],
                                                                                        //['para', ['ul', 'ol', 'paragraph']],
                                                                                        //['table', ['table']],
                                                                                        //['insert', ['link', 'picture', 'video']],
                                                                                        ['view', ['fullscreen', 'help']]
                                                                                        //['view', ['fullscreen', 'codeview', 'help']]
                                                                                    ],
                                                                                    callbacks: {
                                                                                        onChange: function(contents, $editable) {
                                                                                            window.livewire.find('ttJOaWTfqGzX7mWw3Sig').set('discussionMessage', contents);
                                                                                        }
                                                                                    }
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                        <!-- Livewire Component wire-end:ttJOaWTfqGzX7mWw3Sig -->
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:sG80LJruGBOoXkSMtjSJ -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Livewire Component wire-end:g1XQidHXmr5vGxUTX24r -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div wire:id="RcMpUKr6QA23y8dKT3bG">
                                            <div class="row" wire:key="$research->id">
                                                <div class="col-md-12 offset-sm-0">
                                                    <div class="card">
                                                        <div class="card-header" wire:click="expand" style="cursor:grab">
                                                            <div class="row">
                                                                <div class="col-md-1 offset-sm-0">
                                                                    <h1 style="color:red;">10</h1>
                                                                </div>
                                                                <div class="col-md-11 offset-sm-0">
                                                                    <div wire:id="vlmvna2UI3ZNveXztKGz">
                                                                        <div wire:key="$research->id">
                                                                            <div class="row">
                                                                                <div class="col-md-5 border-right offset-sm-0">
                                                                                    <i>E0451.1908440</i> |
                                                                                    Elektronika Industri PTE
                                                                                    <br>
                                                                                    <b>yusuf ibnu sidhiq</b>
                                                                                </div>
                                                                                <div class="col-md-4 offset-sm-0">
                                                                                    SK-1908440-1 |
                                                                                    <b>Pre-defense</b>
                                                                                    <br>
                                                                                    <i>Research is in progress</i>
                                                                                </div>
                                                                                <div class="col-md-3 text-right offset-sm-0">
                                                                                    <i>Click to fold/unfold</i> <i class="fa fa-arrow-circle-down fa-md" style="color:red;" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:vlmvna2UI3ZNveXztKGz -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12 offset-sm-0">
                                                                    <div wire:id="HKGWDWub8UjaqdAwUagj">
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-sm-0">

                                                                                <b><u>Implementasi STM32 Edutrainer untuk Pembelajaran Berbasis Projek pada Mata Pelajaran Mikrokontroller Di SMK</u></b>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-md-0">
                                                                                <div class="row">
                                                                                    <div class="col-md-8 border-right offset-md-0">
                                                                                        <div wire:id="5JOgHKPl3KcslzVI4Dgr">
                                                                                            <div class="row">
                                                                                                <div wire:click="supervise" style="cursor:pointer;" class="col-md-12 offset-md-0">
                                                                                                    <i class="fas fa-spinner"></i><b> Progress of Supervision</b>
                                                                                                    <i>
                                                                                                        Click to unfold/fold
                                                                                                    </i>
                                                                                                    <i class="fa fa-arrow-circle-down fa-sm" style="color:blue; cursor:pointer;" aria-hidden="true"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">JKR</i>
                                                                                                            <button wire:click="$emit('createSuperviseDiscussion', 2328)" class="btn btn-sm"><i class="fas fa-plus-circle"></i> Add Meeting</button>


                                                                                                            <a wire:click="bypassMeeting(2328)" style="cursor: pointer"><i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass</a>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">RPR</i>
                                                                                                            &nbsp;



                                                                                                            <i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div wire:id="7ezXRxULIf4cHdWEyCP3">


                                                                                                <!-- Modal -->
                                                                                                <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                                                <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">×</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <div>
                                                                                                                    <script>
                                                                                                                        window.setTimeout(function() {
                                                                                                                            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                                                $(this).remove();
                                                                                                                            });
                                                                                                                        }, 5000);
                                                                                                                    </script>

                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="supervisionTopic">Topic</label>
                                                                                                                                <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-check">
                                                                                                                                <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                                                <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12">
                                                                                                                        <div class="form-group" wire:ignore="">
                                                                                                                            <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 text-right">
                                                                                                                        <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <script>
                                                                                                    window.livewire.on('superviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('show');
                                                                                                    });
                                                                                                    window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('hide');
                                                                                                    });
                                                                                                    window.livewire.on('resetDiscussionMessage', () => {
                                                                                                        $("#discussionMessage").summernote('reset');
                                                                                                    });
                                                                                                    $('#discussionMessage').summernote({
                                                                                                        tabsize: 2,
                                                                                                        height: 60,
                                                                                                        toolbar: [
                                                                                                            ['style', ['style']],
                                                                                                            ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                                            ['color', ['color']],
                                                                                                            //['para', ['ul', 'ol', 'paragraph']],
                                                                                                            //['table', ['table']],
                                                                                                            //['insert', ['link', 'picture', 'video']],
                                                                                                            ['view', ['fullscreen', 'help']]
                                                                                                            //['view', ['fullscreen', 'codeview', 'help']]
                                                                                                        ],
                                                                                                        callbacks: {
                                                                                                            onChange: function(contents, $editable) {
                                                                                                                window.livewire.find('7ezXRxULIf4cHdWEyCP3').set('discussionMessage', contents);
                                                                                                            }
                                                                                                        }
                                                                                                    });
                                                                                                </script>
                                                                                            </div>
                                                                                            <!-- Livewire Component wire-end:7ezXRxULIf4cHdWEyCP3 -->
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:5JOgHKPl3KcslzVI4Dgr -->
                                                                                    </div>
                                                                                    <div class="col-md-4 offset-md-0">
                                                                                        <div wire:id="c2Cv9PBPWof2BtFsCqUQ">
                                                                                            <div wire:key="$research->id">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b> Approval of Defense</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:c2Cv9PBPWof2BtFsCqUQ -->
                                                                                        <hr>
                                                                                        <div wire:id="Dwy1WkZ3bRrRdwebw3Bk">
                                                                                            <div wire:key="$research->id">
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b>Applied Event</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:Dwy1WkZ3bRrRdwebw3Bk -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div wire:id="ntxuE8PLbvnLu77cVfSe">


                                                                            <!-- Modal -->
                                                                            <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                <div class="modal-dialog modal-lg" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                            <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">×</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div>
                                                                                                <script>
                                                                                                    window.setTimeout(function() {
                                                                                                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                            $(this).remove();
                                                                                                        });
                                                                                                    }, 5000);
                                                                                                </script>

                                                                                            </div>
                                                                                            <div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <label for="supervisionTopic">Topic</label>
                                                                                                            <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-check">
                                                                                                            <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                            <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group" wire:ignore="">
                                                                                                        <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 text-right">
                                                                                                    <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <script>
                                                                                window.livewire.on('superviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('show');
                                                                                });
                                                                                window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('hide');
                                                                                });
                                                                                window.livewire.on('resetDiscussionMessage', () => {
                                                                                    $("#discussionMessage").summernote('reset');
                                                                                });
                                                                                $('#discussionMessage').summernote({
                                                                                    tabsize: 2,
                                                                                    height: 60,
                                                                                    toolbar: [
                                                                                        ['style', ['style']],
                                                                                        ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                        ['color', ['color']],
                                                                                        //['para', ['ul', 'ol', 'paragraph']],
                                                                                        //['table', ['table']],
                                                                                        //['insert', ['link', 'picture', 'video']],
                                                                                        ['view', ['fullscreen', 'help']]
                                                                                        //['view', ['fullscreen', 'codeview', 'help']]
                                                                                    ],
                                                                                    callbacks: {
                                                                                        onChange: function(contents, $editable) {
                                                                                            window.livewire.find('ntxuE8PLbvnLu77cVfSe').set('discussionMessage', contents);
                                                                                        }
                                                                                    }
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                        <!-- Livewire Component wire-end:ntxuE8PLbvnLu77cVfSe -->
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:HKGWDWub8UjaqdAwUagj -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Livewire Component wire-end:RcMpUKr6QA23y8dKT3bG -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div wire:id="06aPJ6QV1vcecuZ12Dke">
                                            <div class="row" wire:key="$research->id">
                                                <div class="col-md-12 offset-sm-0">
                                                    <div class="card">
                                                        <div class="card-header" wire:click="expand" style="cursor:grab">
                                                            <div class="row">
                                                                <div class="col-md-1 offset-sm-0">
                                                                    <h1 style="color:red;">11</h1>
                                                                </div>
                                                                <div class="col-md-11 offset-sm-0">
                                                                    <div wire:id="pQbrdRhCFIlZXQOIEX3A">
                                                                        <div wire:key="$research->id">
                                                                            <div class="row">
                                                                                <div class="col-md-5 border-right offset-sm-0">
                                                                                    <i>E0451.1903567</i> |
                                                                                    Elektronika Industri PTE
                                                                                    <br>
                                                                                    <b>Dhafin Naufal Ramadhan</b>
                                                                                </div>
                                                                                <div class="col-md-4 offset-sm-0">
                                                                                    SK-1903567-1 |
                                                                                    <b>Pre-defense</b>
                                                                                    <br>
                                                                                    <i>Research is in progress</i>
                                                                                </div>
                                                                                <div class="col-md-3 text-right offset-sm-0">
                                                                                    <i>Click to fold/unfold</i> <i class="fa fa-arrow-circle-down fa-md" style="color:red;" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:pQbrdRhCFIlZXQOIEX3A -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12 offset-sm-0">
                                                                    <div wire:id="IaucZaTNIJ8cSG2TSDMA">
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-sm-0">

                                                                                <b><u>Analisis Komparatif Hasil Belajar Siswa Kelas X Menggunakan Model Pembelajaran Kooperatif Jenis TSTS dan STAD pada Mata Pelajaran Dasar-dasar Teknik Elektronika di SMKN 1 Cimahi.</u></b>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-md-0">
                                                                                <div class="row">
                                                                                    <div class="col-md-8 border-right offset-md-0">
                                                                                        <div wire:id="dP5fqcSAKcM86kefzmSU">
                                                                                            <div class="row">
                                                                                                <div wire:click="supervise" style="cursor:pointer;" class="col-md-12 offset-md-0">
                                                                                                    <i class="fas fa-spinner"></i><b> Progress of Supervision</b>
                                                                                                    <i>
                                                                                                        Click to unfold/fold
                                                                                                    </i>
                                                                                                    <i class="fa fa-arrow-circle-down fa-sm" style="color:blue; cursor:pointer;" aria-hidden="true"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">JKR</i>
                                                                                                            <button wire:click="$emit('createSuperviseDiscussion', 2566)" class="btn btn-sm"><i class="fas fa-plus-circle"></i> Add Meeting</button>


                                                                                                            <a wire:click="bypassMeeting(2566)" style="cursor: pointer"><i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass</a>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">TSR</i>
                                                                                                            &nbsp;



                                                                                                            <i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div wire:id="Cx9y7NJovM8eBQM5wo5f">


                                                                                                <!-- Modal -->
                                                                                                <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                                                <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">×</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <div>
                                                                                                                    <script>
                                                                                                                        window.setTimeout(function() {
                                                                                                                            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                                                $(this).remove();
                                                                                                                            });
                                                                                                                        }, 5000);
                                                                                                                    </script>

                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="supervisionTopic">Topic</label>
                                                                                                                                <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-check">
                                                                                                                                <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                                                <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12">
                                                                                                                        <div class="form-group" wire:ignore="">
                                                                                                                            <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 text-right">
                                                                                                                        <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <script>
                                                                                                    window.livewire.on('superviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('show');
                                                                                                    });
                                                                                                    window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('hide');
                                                                                                    });
                                                                                                    window.livewire.on('resetDiscussionMessage', () => {
                                                                                                        $("#discussionMessage").summernote('reset');
                                                                                                    });
                                                                                                    $('#discussionMessage').summernote({
                                                                                                        tabsize: 2,
                                                                                                        height: 60,
                                                                                                        toolbar: [
                                                                                                            ['style', ['style']],
                                                                                                            ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                                            ['color', ['color']],
                                                                                                            //['para', ['ul', 'ol', 'paragraph']],
                                                                                                            //['table', ['table']],
                                                                                                            //['insert', ['link', 'picture', 'video']],
                                                                                                            ['view', ['fullscreen', 'help']]
                                                                                                            //['view', ['fullscreen', 'codeview', 'help']]
                                                                                                        ],
                                                                                                        callbacks: {
                                                                                                            onChange: function(contents, $editable) {
                                                                                                                window.livewire.find('Cx9y7NJovM8eBQM5wo5f').set('discussionMessage', contents);
                                                                                                            }
                                                                                                        }
                                                                                                    });
                                                                                                </script>
                                                                                            </div>
                                                                                            <!-- Livewire Component wire-end:Cx9y7NJovM8eBQM5wo5f -->
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:dP5fqcSAKcM86kefzmSU -->
                                                                                    </div>
                                                                                    <div class="col-md-4 offset-md-0">
                                                                                        <div wire:id="jMH15nVnZRxDtoSjZppK">
                                                                                            <div wire:key="$research->id">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b> Approval of Defense</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:jMH15nVnZRxDtoSjZppK -->
                                                                                        <hr>
                                                                                        <div wire:id="FWOs1UuBZTc3JdcF7IPr">
                                                                                            <div wire:key="$research->id">
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b>Applied Event</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:FWOs1UuBZTc3JdcF7IPr -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div wire:id="YbYnj5tqbGtoAmtukNTX">


                                                                            <!-- Modal -->
                                                                            <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                <div class="modal-dialog modal-lg" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                            <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">×</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div>
                                                                                                <script>
                                                                                                    window.setTimeout(function() {
                                                                                                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                            $(this).remove();
                                                                                                        });
                                                                                                    }, 5000);
                                                                                                </script>

                                                                                            </div>
                                                                                            <div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <label for="supervisionTopic">Topic</label>
                                                                                                            <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-check">
                                                                                                            <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                            <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group" wire:ignore="">
                                                                                                        <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 text-right">
                                                                                                    <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <script>
                                                                                window.livewire.on('superviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('show');
                                                                                });
                                                                                window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('hide');
                                                                                });
                                                                                window.livewire.on('resetDiscussionMessage', () => {
                                                                                    $("#discussionMessage").summernote('reset');
                                                                                });
                                                                                $('#discussionMessage').summernote({
                                                                                    tabsize: 2,
                                                                                    height: 60,
                                                                                    toolbar: [
                                                                                        ['style', ['style']],
                                                                                        ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                        ['color', ['color']],
                                                                                        //['para', ['ul', 'ol', 'paragraph']],
                                                                                        //['table', ['table']],
                                                                                        //['insert', ['link', 'picture', 'video']],
                                                                                        ['view', ['fullscreen', 'help']]
                                                                                        //['view', ['fullscreen', 'codeview', 'help']]
                                                                                    ],
                                                                                    callbacks: {
                                                                                        onChange: function(contents, $editable) {
                                                                                            window.livewire.find('YbYnj5tqbGtoAmtukNTX').set('discussionMessage', contents);
                                                                                        }
                                                                                    }
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                        <!-- Livewire Component wire-end:YbYnj5tqbGtoAmtukNTX -->
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:IaucZaTNIJ8cSG2TSDMA -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Livewire Component wire-end:06aPJ6QV1vcecuZ12Dke -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div wire:id="pEMzua7VfqxAiaLACEth">
                                            <div class="row" wire:key="$research->id">
                                                <div class="col-md-12 offset-sm-0">
                                                    <div class="card">
                                                        <div class="card-header" wire:click="expand" style="cursor:grab">
                                                            <div class="row">
                                                                <div class="col-md-1 offset-sm-0">
                                                                    <h1 style="color:red;">12</h1>
                                                                </div>
                                                                <div class="col-md-11 offset-sm-0">
                                                                    <div wire:id="PjxuIAjNPAQDSOtRGh7L">
                                                                        <div wire:key="$research->id">
                                                                            <div class="row">
                                                                                <div class="col-md-5 border-right offset-sm-0">
                                                                                    <i>E0451.1908540</i> |
                                                                                    Elektronika Industri PTE
                                                                                    <br>
                                                                                    <b>Restu Febry Budyansah</b>
                                                                                </div>
                                                                                <div class="col-md-4 offset-sm-0">
                                                                                    SK-1908540-1 |
                                                                                    <b>Pre-defense</b>
                                                                                    <br>
                                                                                    <i>Research is in progress</i>
                                                                                </div>
                                                                                <div class="col-md-3 text-right offset-sm-0">
                                                                                    <i>Click to fold/unfold</i> <i class="fa fa-arrow-circle-down fa-md" style="color:red;" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:PjxuIAjNPAQDSOtRGh7L -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12 offset-sm-0">
                                                                    <div wire:id="usimh4aKV5yOxkP2NmLf">
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-sm-0">

                                                                                <b><u>Analisis Pemahaman Siswa Dalam Pembelajaran Teknik Kontrol Menggunakan Software Festo CodeSys Di Kelas XI Mekatronika SMK Negeri 2 Cimahi</u></b>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-md-0">
                                                                                <div class="row">
                                                                                    <div class="col-md-8 border-right offset-md-0">
                                                                                        <div wire:id="KAG5GhxycHWa3ZffGRux">
                                                                                            <div class="row">
                                                                                                <div wire:click="supervise" style="cursor:pointer;" class="col-md-12 offset-md-0">
                                                                                                    <i class="fas fa-spinner"></i><b> Progress of Supervision</b>
                                                                                                    <i>
                                                                                                        Click to unfold/fold
                                                                                                    </i>
                                                                                                    <i class="fa fa-arrow-circle-down fa-sm" style="color:blue; cursor:pointer;" aria-hidden="true"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">JKR</i>
                                                                                                            <button wire:click="$emit('createSuperviseDiscussion', 2519)" class="btn btn-sm"><i class="fas fa-plus-circle"></i> Add Meeting</button>


                                                                                                            <a wire:click="bypassMeeting(2519)" style="cursor: pointer"><i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass</a>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">AIP</i>
                                                                                                            &nbsp;



                                                                                                            <i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div wire:id="aUJPP0fudA43joFkWD03">


                                                                                                <!-- Modal -->
                                                                                                <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                                                <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">×</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <div>
                                                                                                                    <script>
                                                                                                                        window.setTimeout(function() {
                                                                                                                            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                                                $(this).remove();
                                                                                                                            });
                                                                                                                        }, 5000);
                                                                                                                    </script>

                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="supervisionTopic">Topic</label>
                                                                                                                                <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-check">
                                                                                                                                <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                                                <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12">
                                                                                                                        <div class="form-group" wire:ignore="">
                                                                                                                            <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 text-right">
                                                                                                                        <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <script>
                                                                                                    window.livewire.on('superviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('show');
                                                                                                    });
                                                                                                    window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('hide');
                                                                                                    });
                                                                                                    window.livewire.on('resetDiscussionMessage', () => {
                                                                                                        $("#discussionMessage").summernote('reset');
                                                                                                    });
                                                                                                    $('#discussionMessage').summernote({
                                                                                                        tabsize: 2,
                                                                                                        height: 60,
                                                                                                        toolbar: [
                                                                                                            ['style', ['style']],
                                                                                                            ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                                            ['color', ['color']],
                                                                                                            //['para', ['ul', 'ol', 'paragraph']],
                                                                                                            //['table', ['table']],
                                                                                                            //['insert', ['link', 'picture', 'video']],
                                                                                                            ['view', ['fullscreen', 'help']]
                                                                                                            //['view', ['fullscreen', 'codeview', 'help']]
                                                                                                        ],
                                                                                                        callbacks: {
                                                                                                            onChange: function(contents, $editable) {
                                                                                                                window.livewire.find('aUJPP0fudA43joFkWD03').set('discussionMessage', contents);
                                                                                                            }
                                                                                                        }
                                                                                                    });
                                                                                                </script>
                                                                                            </div>
                                                                                            <!-- Livewire Component wire-end:aUJPP0fudA43joFkWD03 -->
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:KAG5GhxycHWa3ZffGRux -->
                                                                                    </div>
                                                                                    <div class="col-md-4 offset-md-0">
                                                                                        <div wire:id="R9P4OXnxOBnsovivSMkB">
                                                                                            <div wire:key="$research->id">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b> Approval of Defense</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:R9P4OXnxOBnsovivSMkB -->
                                                                                        <hr>
                                                                                        <div wire:id="QPJMIiLexglC63QOMhPB">
                                                                                            <div wire:key="$research->id">
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b>Applied Event</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:QPJMIiLexglC63QOMhPB -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div wire:id="ygL8AQ1WTG1DBdt0YOVI">


                                                                            <!-- Modal -->
                                                                            <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                <div class="modal-dialog modal-lg" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                            <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">×</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div>
                                                                                                <script>
                                                                                                    window.setTimeout(function() {
                                                                                                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                            $(this).remove();
                                                                                                        });
                                                                                                    }, 5000);
                                                                                                </script>

                                                                                            </div>
                                                                                            <div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <label for="supervisionTopic">Topic</label>
                                                                                                            <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-check">
                                                                                                            <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                            <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group" wire:ignore="">
                                                                                                        <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 text-right">
                                                                                                    <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <script>
                                                                                window.livewire.on('superviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('show');
                                                                                });
                                                                                window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('hide');
                                                                                });
                                                                                window.livewire.on('resetDiscussionMessage', () => {
                                                                                    $("#discussionMessage").summernote('reset');
                                                                                });
                                                                                $('#discussionMessage').summernote({
                                                                                    tabsize: 2,
                                                                                    height: 60,
                                                                                    toolbar: [
                                                                                        ['style', ['style']],
                                                                                        ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                        ['color', ['color']],
                                                                                        //['para', ['ul', 'ol', 'paragraph']],
                                                                                        //['table', ['table']],
                                                                                        //['insert', ['link', 'picture', 'video']],
                                                                                        ['view', ['fullscreen', 'help']]
                                                                                        //['view', ['fullscreen', 'codeview', 'help']]
                                                                                    ],
                                                                                    callbacks: {
                                                                                        onChange: function(contents, $editable) {
                                                                                            window.livewire.find('ygL8AQ1WTG1DBdt0YOVI').set('discussionMessage', contents);
                                                                                        }
                                                                                    }
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                        <!-- Livewire Component wire-end:ygL8AQ1WTG1DBdt0YOVI -->
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:usimh4aKV5yOxkP2NmLf -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Livewire Component wire-end:pEMzua7VfqxAiaLACEth -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div wire:id="rWAe9b1Ak0PbCAsNoeus">
                                            <div class="row" wire:key="$research->id">
                                                <div class="col-md-12 offset-sm-0">
                                                    <div class="card">
                                                        <div class="card-header" wire:click="expand" style="cursor:grab">
                                                            <div class="row">
                                                                <div class="col-md-1 offset-sm-0">
                                                                    <h1 style="color:red;">13</h1>
                                                                </div>
                                                                <div class="col-md-11 offset-sm-0">
                                                                    <div wire:id="DNqCu6fALynQXSVryJWx">
                                                                        <div wire:key="$research->id">
                                                                            <div class="row">
                                                                                <div class="col-md-5 border-right offset-sm-0">
                                                                                    <i>E0451.1904661</i> |
                                                                                    Tenaga Elektrik PTE
                                                                                    <br>
                                                                                    <b>Irgi Rahmadian</b>
                                                                                </div>
                                                                                <div class="col-md-4 offset-sm-0">
                                                                                    SK-1904661-1 |
                                                                                    <b>Pre-defense</b>
                                                                                    <br>
                                                                                    <i>Research is in progress</i>
                                                                                </div>
                                                                                <div class="col-md-3 text-right offset-sm-0">
                                                                                    <i>Click to fold/unfold</i> <i class="fa fa-arrow-circle-down fa-md" style="color:red;" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:DNqCu6fALynQXSVryJWx -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12 offset-sm-0">
                                                                    <div wire:id="L8u0DYhJlPltm6nkS60Z">
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-sm-0">

                                                                                <b><u>Implementasi Model Pembelajaran STAD Berbantuan Quizizz untuk Meningkatkan Keterampilan Kolaborasi Siswa</u></b>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-md-0">
                                                                                <div class="row">
                                                                                    <div class="col-md-8 border-right offset-md-0">
                                                                                        <div wire:id="LgqT3Q6UfBtta3OaRLcZ">
                                                                                            <div class="row">
                                                                                                <div wire:click="supervise" style="cursor:pointer;" class="col-md-12 offset-md-0">
                                                                                                    <i class="fas fa-spinner"></i><b> Progress of Supervision</b>
                                                                                                    <i>
                                                                                                        Click to unfold/fold
                                                                                                    </i>
                                                                                                    <i class="fa fa-arrow-circle-down fa-sm" style="color:blue; cursor:pointer;" aria-hidden="true"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">JKR</i>
                                                                                                            <button wire:click="$emit('createSuperviseDiscussion', 2465)" class="btn btn-sm"><i class="fas fa-plus-circle"></i> Add Meeting</button>


                                                                                                            <a wire:click="bypassMeeting(2465)" style="cursor: pointer"><i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass</a>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">DLH</i>
                                                                                                            &nbsp;



                                                                                                            <i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div wire:id="D2YKXRxM9Uk2Mrs6LMTe">


                                                                                                <!-- Modal -->
                                                                                                <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                                                <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">×</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <div>
                                                                                                                    <script>
                                                                                                                        window.setTimeout(function() {
                                                                                                                            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                                                $(this).remove();
                                                                                                                            });
                                                                                                                        }, 5000);
                                                                                                                    </script>

                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="supervisionTopic">Topic</label>
                                                                                                                                <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-check">
                                                                                                                                <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                                                <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12">
                                                                                                                        <div class="form-group" wire:ignore="">
                                                                                                                            <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 text-right">
                                                                                                                        <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <script>
                                                                                                    window.livewire.on('superviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('show');
                                                                                                    });
                                                                                                    window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('hide');
                                                                                                    });
                                                                                                    window.livewire.on('resetDiscussionMessage', () => {
                                                                                                        $("#discussionMessage").summernote('reset');
                                                                                                    });
                                                                                                    $('#discussionMessage').summernote({
                                                                                                        tabsize: 2,
                                                                                                        height: 60,
                                                                                                        toolbar: [
                                                                                                            ['style', ['style']],
                                                                                                            ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                                            ['color', ['color']],
                                                                                                            //['para', ['ul', 'ol', 'paragraph']],
                                                                                                            //['table', ['table']],
                                                                                                            //['insert', ['link', 'picture', 'video']],
                                                                                                            ['view', ['fullscreen', 'help']]
                                                                                                            //['view', ['fullscreen', 'codeview', 'help']]
                                                                                                        ],
                                                                                                        callbacks: {
                                                                                                            onChange: function(contents, $editable) {
                                                                                                                window.livewire.find('D2YKXRxM9Uk2Mrs6LMTe').set('discussionMessage', contents);
                                                                                                            }
                                                                                                        }
                                                                                                    });
                                                                                                </script>
                                                                                            </div>
                                                                                            <!-- Livewire Component wire-end:D2YKXRxM9Uk2Mrs6LMTe -->
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:LgqT3Q6UfBtta3OaRLcZ -->
                                                                                    </div>
                                                                                    <div class="col-md-4 offset-md-0">
                                                                                        <div wire:id="W9q8LlUgc7pQ2siytsHE">
                                                                                            <div wire:key="$research->id">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b> Approval of Defense</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:W9q8LlUgc7pQ2siytsHE -->
                                                                                        <hr>
                                                                                        <div wire:id="n80AG46Av32GRIv0LBm4">
                                                                                            <div wire:key="$research->id">
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b>Applied Event</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:n80AG46Av32GRIv0LBm4 -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div wire:id="1YiSMXC72XDWeX3AE3je">


                                                                            <!-- Modal -->
                                                                            <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                <div class="modal-dialog modal-lg" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                            <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">×</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div>
                                                                                                <script>
                                                                                                    window.setTimeout(function() {
                                                                                                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                            $(this).remove();
                                                                                                        });
                                                                                                    }, 5000);
                                                                                                </script>

                                                                                            </div>
                                                                                            <div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <label for="supervisionTopic">Topic</label>
                                                                                                            <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-check">
                                                                                                            <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                            <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group" wire:ignore="">
                                                                                                        <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 text-right">
                                                                                                    <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <script>
                                                                                window.livewire.on('superviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('show');
                                                                                });
                                                                                window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('hide');
                                                                                });
                                                                                window.livewire.on('resetDiscussionMessage', () => {
                                                                                    $("#discussionMessage").summernote('reset');
                                                                                });
                                                                                $('#discussionMessage').summernote({
                                                                                    tabsize: 2,
                                                                                    height: 60,
                                                                                    toolbar: [
                                                                                        ['style', ['style']],
                                                                                        ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                        ['color', ['color']],
                                                                                        //['para', ['ul', 'ol', 'paragraph']],
                                                                                        //['table', ['table']],
                                                                                        //['insert', ['link', 'picture', 'video']],
                                                                                        ['view', ['fullscreen', 'help']]
                                                                                        //['view', ['fullscreen', 'codeview', 'help']]
                                                                                    ],
                                                                                    callbacks: {
                                                                                        onChange: function(contents, $editable) {
                                                                                            window.livewire.find('1YiSMXC72XDWeX3AE3je').set('discussionMessage', contents);
                                                                                        }
                                                                                    }
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                        <!-- Livewire Component wire-end:1YiSMXC72XDWeX3AE3je -->
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:L8u0DYhJlPltm6nkS60Z -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Livewire Component wire-end:rWAe9b1Ak0PbCAsNoeus -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div wire:id="fm22ZbzPlu4VqxXGk2e8">
                                            <div class="row" wire:key="$research->id">
                                                <div class="col-md-12 offset-sm-0">
                                                    <div class="card">
                                                        <div class="card-header" wire:click="expand" style="cursor:grab">
                                                            <div class="row">
                                                                <div class="col-md-1 offset-sm-0">
                                                                    <h1 style="color:red;">14</h1>
                                                                </div>
                                                                <div class="col-md-11 offset-sm-0">
                                                                    <div wire:id="Fy6kaOQTtlTUmyNh1Hny">
                                                                        <div wire:key="$research->id">
                                                                            <div class="row">
                                                                                <div class="col-md-5 border-right offset-sm-0">
                                                                                    <i>E0451.1902921</i> |
                                                                                    Tenaga Elektrik PTE
                                                                                    <br>
                                                                                    <b>Anisah -</b>
                                                                                </div>
                                                                                <div class="col-md-4 offset-sm-0">
                                                                                    SK-1902921-1 |
                                                                                    <b>Pre-defense</b>
                                                                                    <br>
                                                                                    <i>Research is in progress</i>
                                                                                </div>
                                                                                <div class="col-md-3 text-right offset-sm-0">
                                                                                    <i>Click to fold/unfold</i> <i class="fa fa-arrow-circle-down fa-md" style="color:red;" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:Fy6kaOQTtlTUmyNh1Hny -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12 offset-sm-0">
                                                                    <div wire:id="e2LGiaZNS4ahxZ15nOC1">
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-sm-0">

                                                                                <b><u>Pengembangan Jobsheet Berbasis Android Untuk Mewujudkan Education for Sustainable Development di Sekolah Menengah Kejuruan </u></b>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-md-0">
                                                                                <div class="row">
                                                                                    <div class="col-md-8 border-right offset-md-0">
                                                                                        <div wire:id="WhwJiviR1x2dnn5ejWu5">
                                                                                            <div class="row">
                                                                                                <div wire:click="supervise" style="cursor:pointer;" class="col-md-12 offset-md-0">
                                                                                                    <i class="fas fa-spinner"></i><b> Progress of Supervision</b>
                                                                                                    <i>
                                                                                                        Click to unfold/fold
                                                                                                    </i>
                                                                                                    <i class="fa fa-arrow-circle-down fa-sm" style="color:blue; cursor:pointer;" aria-hidden="true"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">JKR</i>
                                                                                                            <button wire:click="$emit('createSuperviseDiscussion', 2371)" class="btn btn-sm"><i class="fas fa-plus-circle"></i> Add Meeting</button>


                                                                                                            <a wire:click="bypassMeeting(2371)" style="cursor: pointer"><i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass</a>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">ELM</i>
                                                                                                            &nbsp;



                                                                                                            <i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div wire:id="LOKhHDVkz4l0qDoKDx4o">


                                                                                                <!-- Modal -->
                                                                                                <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                                                <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">×</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <div>
                                                                                                                    <script>
                                                                                                                        window.setTimeout(function() {
                                                                                                                            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                                                $(this).remove();
                                                                                                                            });
                                                                                                                        }, 5000);
                                                                                                                    </script>

                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="supervisionTopic">Topic</label>
                                                                                                                                <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-check">
                                                                                                                                <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                                                <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12">
                                                                                                                        <div class="form-group" wire:ignore="">
                                                                                                                            <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 text-right">
                                                                                                                        <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <script>
                                                                                                    window.livewire.on('superviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('show');
                                                                                                    });
                                                                                                    window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('hide');
                                                                                                    });
                                                                                                    window.livewire.on('resetDiscussionMessage', () => {
                                                                                                        $("#discussionMessage").summernote('reset');
                                                                                                    });
                                                                                                    $('#discussionMessage').summernote({
                                                                                                        tabsize: 2,
                                                                                                        height: 60,
                                                                                                        toolbar: [
                                                                                                            ['style', ['style']],
                                                                                                            ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                                            ['color', ['color']],
                                                                                                            //['para', ['ul', 'ol', 'paragraph']],
                                                                                                            //['table', ['table']],
                                                                                                            //['insert', ['link', 'picture', 'video']],
                                                                                                            ['view', ['fullscreen', 'help']]
                                                                                                            //['view', ['fullscreen', 'codeview', 'help']]
                                                                                                        ],
                                                                                                        callbacks: {
                                                                                                            onChange: function(contents, $editable) {
                                                                                                                window.livewire.find('LOKhHDVkz4l0qDoKDx4o').set('discussionMessage', contents);
                                                                                                            }
                                                                                                        }
                                                                                                    });
                                                                                                </script>
                                                                                            </div>
                                                                                            <!-- Livewire Component wire-end:LOKhHDVkz4l0qDoKDx4o -->
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:WhwJiviR1x2dnn5ejWu5 -->
                                                                                    </div>
                                                                                    <div class="col-md-4 offset-md-0">
                                                                                        <div wire:id="J5Y5zPczpSWebPOeZFc4">
                                                                                            <div wire:key="$research->id">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b> Approval of Defense</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:J5Y5zPczpSWebPOeZFc4 -->
                                                                                        <hr>
                                                                                        <div wire:id="fXxZ5yxEgonYQuMCS1jX">
                                                                                            <div wire:key="$research->id">
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b>Applied Event</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:fXxZ5yxEgonYQuMCS1jX -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div wire:id="mODfc72Gx0Ct2eVfdQfk">


                                                                            <!-- Modal -->
                                                                            <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                <div class="modal-dialog modal-lg" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                            <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">×</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div>
                                                                                                <script>
                                                                                                    window.setTimeout(function() {
                                                                                                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                            $(this).remove();
                                                                                                        });
                                                                                                    }, 5000);
                                                                                                </script>

                                                                                            </div>
                                                                                            <div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <label for="supervisionTopic">Topic</label>
                                                                                                            <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-check">
                                                                                                            <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                            <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group" wire:ignore="">
                                                                                                        <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 text-right">
                                                                                                    <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <script>
                                                                                window.livewire.on('superviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('show');
                                                                                });
                                                                                window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('hide');
                                                                                });
                                                                                window.livewire.on('resetDiscussionMessage', () => {
                                                                                    $("#discussionMessage").summernote('reset');
                                                                                });
                                                                                $('#discussionMessage').summernote({
                                                                                    tabsize: 2,
                                                                                    height: 60,
                                                                                    toolbar: [
                                                                                        ['style', ['style']],
                                                                                        ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                        ['color', ['color']],
                                                                                        //['para', ['ul', 'ol', 'paragraph']],
                                                                                        //['table', ['table']],
                                                                                        //['insert', ['link', 'picture', 'video']],
                                                                                        ['view', ['fullscreen', 'help']]
                                                                                        //['view', ['fullscreen', 'codeview', 'help']]
                                                                                    ],
                                                                                    callbacks: {
                                                                                        onChange: function(contents, $editable) {
                                                                                            window.livewire.find('mODfc72Gx0Ct2eVfdQfk').set('discussionMessage', contents);
                                                                                        }
                                                                                    }
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                        <!-- Livewire Component wire-end:mODfc72Gx0Ct2eVfdQfk -->
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:e2LGiaZNS4ahxZ15nOC1 -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Livewire Component wire-end:fm22ZbzPlu4VqxXGk2e8 -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div wire:id="38kPhRlk1KBMe9AN6rF7">
                                            <div class="row" wire:key="$research->id">
                                                <div class="col-md-12 offset-sm-0">
                                                    <div class="card">
                                                        <div class="card-header" wire:click="expand" style="cursor:grab">
                                                            <div class="row">
                                                                <div class="col-md-1 offset-sm-0">
                                                                    <h1 style="color:red;">15</h1>
                                                                </div>
                                                                <div class="col-md-11 offset-sm-0">
                                                                    <div wire:id="0eUXqiT3ifqw9RzOwAfT">
                                                                        <div wire:key="$research->id">
                                                                            <div class="row">
                                                                                <div class="col-md-5 border-right offset-sm-0">
                                                                                    <i>E0451.1608132</i> |
                                                                                    Elektronika Industri PTE
                                                                                    <br>
                                                                                    <b>Riyan Mardiansyah</b>
                                                                                </div>
                                                                                <div class="col-md-4 offset-sm-0">
                                                                                    SK-1608132-1 |
                                                                                    <b>Pre-defense</b>
                                                                                    <br>
                                                                                    <i>Pre-defense approval has been requested </i>
                                                                                </div>
                                                                                <div class="col-md-3 text-right offset-sm-0">
                                                                                    <i>Click to fold/unfold</i> <i class="fa fa-arrow-circle-down fa-md" style="color:red;" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:0eUXqiT3ifqw9RzOwAfT -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12 offset-sm-0">
                                                                    <div wire:id="d4fRp7MnKuikMg5BkowP">
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-sm-0">

                                                                                <b><u>Kelayakan Media Pembelajaran Bebasis Software EAGLE dalam Mendesain PCB pada mata pelajaran Kerja Bengkel dan Gambar Teknik Kelas X di SMKN 1 Sumedang</u></b>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-md-0">
                                                                                <div class="row">
                                                                                    <div class="col-md-8 border-right offset-md-0">
                                                                                        <div wire:id="jX8km0uX2GNsG77XMfW1">
                                                                                            <div class="row">
                                                                                                <div wire:click="supervise" style="cursor:pointer;" class="col-md-12 offset-md-0">
                                                                                                    <i class="fas fa-spinner"></i><b> Progress of Supervision</b>
                                                                                                    <i>
                                                                                                        Click to unfold/fold
                                                                                                    </i>
                                                                                                    <i class="fa fa-arrow-circle-down fa-sm" style="color:blue; cursor:pointer;" aria-hidden="true"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">JKR</i>
                                                                                                            <button wire:click="$emit('createSuperviseDiscussion', 2489)" class="btn btn-sm"><i class="fas fa-plus-circle"></i> Add Meeting</button>


                                                                                                            <a wire:click="bypassMeeting(2489)" style="cursor: pointer"><i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass</a>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">RPR</i>
                                                                                                            &nbsp;



                                                                                                            <i class="fa fa-ban fa-xs" aria-hidden="true" style="color:red"></i> bypass
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div wire:id="xIPs2LTZd4DGfj5b2pkZ">


                                                                                                <!-- Modal -->
                                                                                                <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                                                <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">×</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <div>
                                                                                                                    <script>
                                                                                                                        window.setTimeout(function() {
                                                                                                                            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                                                $(this).remove();
                                                                                                                            });
                                                                                                                        }, 5000);
                                                                                                                    </script>

                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="supervisionTopic">Topic</label>
                                                                                                                                <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-check">
                                                                                                                                <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                                                <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12">
                                                                                                                        <div class="form-group" wire:ignore="">
                                                                                                                            <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 text-right">
                                                                                                                        <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <script>
                                                                                                    window.livewire.on('superviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('show');
                                                                                                    });
                                                                                                    window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('hide');
                                                                                                    });
                                                                                                    window.livewire.on('resetDiscussionMessage', () => {
                                                                                                        $("#discussionMessage").summernote('reset');
                                                                                                    });
                                                                                                    $('#discussionMessage').summernote({
                                                                                                        tabsize: 2,
                                                                                                        height: 60,
                                                                                                        toolbar: [
                                                                                                            ['style', ['style']],
                                                                                                            ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                                            ['color', ['color']],
                                                                                                            //['para', ['ul', 'ol', 'paragraph']],
                                                                                                            //['table', ['table']],
                                                                                                            //['insert', ['link', 'picture', 'video']],
                                                                                                            ['view', ['fullscreen', 'help']]
                                                                                                            //['view', ['fullscreen', 'codeview', 'help']]
                                                                                                        ],
                                                                                                        callbacks: {
                                                                                                            onChange: function(contents, $editable) {
                                                                                                                window.livewire.find('xIPs2LTZd4DGfj5b2pkZ').set('discussionMessage', contents);
                                                                                                            }
                                                                                                        }
                                                                                                    });
                                                                                                </script>
                                                                                            </div>
                                                                                            <!-- Livewire Component wire-end:xIPs2LTZd4DGfj5b2pkZ -->
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:jX8km0uX2GNsG77XMfW1 -->
                                                                                    </div>
                                                                                    <div class="col-md-4 offset-md-0">
                                                                                        <div wire:id="0M6lDlD7p3GtIii9R6bR">
                                                                                            <div wire:key="$research->id">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b> Approval of Defense</b>
                                                                                                        <br>
                                                                                                        <i class="fa fa-ban fa-xs" style="color:red" aria-hidden="true"></i>

                                                                                                        Pre defense&nbsp;|&nbsp;
                                                                                                        JKR
                                                                                                        <a class="btn btn-info btn-xs" wire:click="approve(2280)"><i class="fa fa-check" aria-hidden="true"></i> Approve</a>

                                                                                                        <br>
                                                                                                        <i class="fa fa-ban fa-xs" style="color:red" aria-hidden="true"></i>

                                                                                                        Pre defense&nbsp;|&nbsp;
                                                                                                        RPR

                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:0M6lDlD7p3GtIii9R6bR -->
                                                                                        <hr>
                                                                                        <div wire:id="jSxbkMZSscU2Vm5uJ91o">
                                                                                            <div wire:key="$research->id">
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b>Applied Event</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:jSxbkMZSscU2Vm5uJ91o -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div wire:id="ZdDkDoBtj1laKsnI5wTF">


                                                                            <!-- Modal -->
                                                                            <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                <div class="modal-dialog modal-lg" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                            <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">×</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div>
                                                                                                <script>
                                                                                                    window.setTimeout(function() {
                                                                                                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                            $(this).remove();
                                                                                                        });
                                                                                                    }, 5000);
                                                                                                </script>

                                                                                            </div>
                                                                                            <div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <label for="supervisionTopic">Topic</label>
                                                                                                            <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-check">
                                                                                                            <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                            <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group" wire:ignore="">
                                                                                                        <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 text-right">
                                                                                                    <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <script>
                                                                                window.livewire.on('superviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('show');
                                                                                });
                                                                                window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('hide');
                                                                                });
                                                                                window.livewire.on('resetDiscussionMessage', () => {
                                                                                    $("#discussionMessage").summernote('reset');
                                                                                });
                                                                                $('#discussionMessage').summernote({
                                                                                    tabsize: 2,
                                                                                    height: 60,
                                                                                    toolbar: [
                                                                                        ['style', ['style']],
                                                                                        ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                        ['color', ['color']],
                                                                                        //['para', ['ul', 'ol', 'paragraph']],
                                                                                        //['table', ['table']],
                                                                                        //['insert', ['link', 'picture', 'video']],
                                                                                        ['view', ['fullscreen', 'help']]
                                                                                        //['view', ['fullscreen', 'codeview', 'help']]
                                                                                    ],
                                                                                    callbacks: {
                                                                                        onChange: function(contents, $editable) {
                                                                                            window.livewire.find('ZdDkDoBtj1laKsnI5wTF').set('discussionMessage', contents);
                                                                                        }
                                                                                    }
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                        <!-- Livewire Component wire-end:ZdDkDoBtj1laKsnI5wTF -->
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:d4fRp7MnKuikMg5BkowP -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Livewire Component wire-end:38kPhRlk1KBMe9AN6rF7 -->
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div wire:id="zuWOUSpNrOcyGos50T7N">
                                            <div class="row" wire:key="$research->id">
                                                <div class="col-md-12 offset-sm-0">
                                                    <div class="card">
                                                        <div class="card-header" wire:click="expand" style="cursor:grab">
                                                            <div class="row">
                                                                <div class="col-md-1 offset-sm-0">
                                                                    <h1 style="color:red;">1</h1>
                                                                </div>
                                                                <div class="col-md-11 offset-sm-0">
                                                                    <div wire:id="bQAIElgSt4jzvCbBokD9">
                                                                        <div wire:key="$research->id">
                                                                            <div class="row">
                                                                                <div class="col-md-5 border-right offset-sm-0">
                                                                                    <i>E0451.1808218</i> |
                                                                                    Tenaga Elektrik PTE
                                                                                    <br>
                                                                                    <b>Triangga Pramudyo Putra</b>
                                                                                </div>
                                                                                <div class="col-md-4 offset-sm-0">
                                                                                    SE-1808218-1 |
                                                                                    <b>Seminar TE</b>
                                                                                    <br>
                                                                                    <i>Seminar has been approved</i>
                                                                                </div>
                                                                                <div class="col-md-3 text-right offset-sm-0">
                                                                                    <i>Click to fold/unfold</i> <i class="fa fa-arrow-circle-down fa-md" style="color:red;" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:bQAIElgSt4jzvCbBokD9 -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12 offset-sm-0">
                                                                    <div wire:id="18pXJRKQgs10YYI5DOvA">
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-sm-0">

                                                                                <a href="http://ee.upi.edu/arsys/storage/proposal/SE-1808218-1-proposal.pdf" target="blank"><b><u>Sistem Keamanan Sepeda Motor Melalui Android Menggunakan Bluetooth Berbasiskan Mikrokontroler Atmega 328P</u></b></a>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-md-0">
                                                                                <div class="row">
                                                                                    <div class="col-md-8 border-right offset-md-0">
                                                                                        <div wire:id="vTpBApbnBODg9h1iPPNv">
                                                                                            <div class="row">
                                                                                                <div wire:click="supervise" style="cursor:pointer;" class="col-md-12 offset-md-0">
                                                                                                    <i class="fas fa-spinner"></i><b> Progress of Supervision</b>
                                                                                                    <i>
                                                                                                        Click to unfold/fold
                                                                                                    </i>
                                                                                                    <i class="fa fa-arrow-circle-down fa-sm" style="color:blue; cursor:pointer;" aria-hidden="true"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">JKR</i>
                                                                                                            <button wire:click="$emit('createSuperviseDiscussion', 1663)" class="btn btn-sm"><i class="fas fa-plus-circle"></i> Add Meeting</button>


                                                                                                            <a wire:click="bypassMeeting(1663)" style="cursor: pointer"><i class="fa fa-check fa-xs" style="color:green" aria-hidden="true"></i> bypass</a>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div wire:id="ROulwQ1G9p84shRhw64j">


                                                                                                <!-- Modal -->
                                                                                                <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                                                <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">×</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <div>
                                                                                                                    <script>
                                                                                                                        window.setTimeout(function() {
                                                                                                                            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                                                $(this).remove();
                                                                                                                            });
                                                                                                                        }, 5000);
                                                                                                                    </script>

                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="supervisionTopic">Topic</label>
                                                                                                                                <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-check">
                                                                                                                                <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                                                <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12">
                                                                                                                        <div class="form-group" wire:ignore="">
                                                                                                                            <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 text-right">
                                                                                                                        <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <script>
                                                                                                    window.livewire.on('superviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('show');
                                                                                                    });
                                                                                                    window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('hide');
                                                                                                    });
                                                                                                    window.livewire.on('resetDiscussionMessage', () => {
                                                                                                        $("#discussionMessage").summernote('reset');
                                                                                                    });
                                                                                                    $('#discussionMessage').summernote({
                                                                                                        tabsize: 2,
                                                                                                        height: 60,
                                                                                                        toolbar: [
                                                                                                            ['style', ['style']],
                                                                                                            ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                                            ['color', ['color']],
                                                                                                            //['para', ['ul', 'ol', 'paragraph']],
                                                                                                            //['table', ['table']],
                                                                                                            //['insert', ['link', 'picture', 'video']],
                                                                                                            ['view', ['fullscreen', 'help']]
                                                                                                            //['view', ['fullscreen', 'codeview', 'help']]
                                                                                                        ],
                                                                                                        callbacks: {
                                                                                                            onChange: function(contents, $editable) {
                                                                                                                window.livewire.find('ROulwQ1G9p84shRhw64j').set('discussionMessage', contents);
                                                                                                            }
                                                                                                        }
                                                                                                    });
                                                                                                </script>
                                                                                            </div>
                                                                                            <!-- Livewire Component wire-end:ROulwQ1G9p84shRhw64j -->
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:vTpBApbnBODg9h1iPPNv -->
                                                                                    </div>
                                                                                    <div class="col-md-4 offset-md-0">
                                                                                        <div wire:id="4VJJvjMyLwS6JzthklTT">
                                                                                            <div wire:key="$research->id">

                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b> Approval Seminar</b>
                                                                                                        <br>
                                                                                                        <i class="fa fa-check-circle fa-xs" style="color:green" aria-hidden="true"></i>
                                                                                                        Seminar |
                                                                                                        JKR

                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:4VJJvjMyLwS6JzthklTT -->
                                                                                        <hr>
                                                                                        <div wire:id="X1lk083eGPyTN5BuBnyu">
                                                                                            <div wire:key="$research->id">
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b>Applied Event</b>
                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:X1lk083eGPyTN5BuBnyu -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div wire:id="WjMPUXsVEV0irH5N0TVi">


                                                                            <!-- Modal -->
                                                                            <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                <div class="modal-dialog modal-lg" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                            <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">×</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div>
                                                                                                <script>
                                                                                                    window.setTimeout(function() {
                                                                                                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                            $(this).remove();
                                                                                                        });
                                                                                                    }, 5000);
                                                                                                </script>

                                                                                            </div>
                                                                                            <div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <label for="supervisionTopic">Topic</label>
                                                                                                            <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-check">
                                                                                                            <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                            <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group" wire:ignore="">
                                                                                                        <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 text-right">
                                                                                                    <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <script>
                                                                                window.livewire.on('superviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('show');
                                                                                });
                                                                                window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('hide');
                                                                                });
                                                                                window.livewire.on('resetDiscussionMessage', () => {
                                                                                    $("#discussionMessage").summernote('reset');
                                                                                });
                                                                                $('#discussionMessage').summernote({
                                                                                    tabsize: 2,
                                                                                    height: 60,
                                                                                    toolbar: [
                                                                                        ['style', ['style']],
                                                                                        ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                        ['color', ['color']],
                                                                                        //['para', ['ul', 'ol', 'paragraph']],
                                                                                        //['table', ['table']],
                                                                                        //['insert', ['link', 'picture', 'video']],
                                                                                        ['view', ['fullscreen', 'help']]
                                                                                        //['view', ['fullscreen', 'codeview', 'help']]
                                                                                    ],
                                                                                    callbacks: {
                                                                                        onChange: function(contents, $editable) {
                                                                                            window.livewire.find('WjMPUXsVEV0irH5N0TVi').set('discussionMessage', contents);
                                                                                        }
                                                                                    }
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                        <!-- Livewire Component wire-end:WjMPUXsVEV0irH5N0TVi -->
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:18pXJRKQgs10YYI5DOvA -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Livewire Component wire-end:zuWOUSpNrOcyGos50T7N -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div wire:id="f3VaJdms6Ak8sfixVZPT">
                                            <div class="row" wire:key="$research->id">
                                                <div class="col-md-12 offset-sm-0">
                                                    <div class="card">
                                                        <div class="card-header" wire:click="expand" style="cursor:grab">
                                                            <div class="row">
                                                                <div class="col-md-1 offset-sm-0">
                                                                    <h1 style="color:red;">2</h1>
                                                                </div>
                                                                <div class="col-md-11 offset-sm-0">
                                                                    <div wire:id="POkTs8sMSJPZvVpbv0gy">
                                                                        <div wire:key="$research->id">
                                                                            <div class="row">
                                                                                <div class="col-md-5 border-right offset-sm-0">
                                                                                    <i>E0451.1608132</i> |
                                                                                    Elektronika Industri PTE
                                                                                    <br>
                                                                                    <b>Riyan Mardiansyah</b>
                                                                                </div>
                                                                                <div class="col-md-4 offset-sm-0">
                                                                                    SE-1608132-1 |
                                                                                    <b>Seminar TE</b>
                                                                                    <br>
                                                                                    <i>Seminar has been applied</i>
                                                                                </div>
                                                                                <div class="col-md-3 text-right offset-sm-0">
                                                                                    <i>Click to fold/unfold</i> <i class="fa fa-arrow-circle-down fa-md" style="color:red;" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:POkTs8sMSJPZvVpbv0gy -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12 offset-sm-0">
                                                                    <div wire:id="oZNoPgJatmI5vCU0HPyK">
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-sm-0">

                                                                                <b><u>Konversi System Kelistrikan Kendaraan Bermotor Type Karburator dengan Sistem Kelistrikan CDI(Capacitor Discharge Ignition) menjadi Fuel Injection dengan Menggunakan ECU(Electronik Control Unit)</u></b>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        <div class="row">
                                                                            <div class="col-md-12 offset-md-0">
                                                                                <div class="row">
                                                                                    <div class="col-md-8 border-right offset-md-0">
                                                                                        <div wire:id="UsN2pudQs4yHXeMZxz7c">
                                                                                            <div class="row">
                                                                                                <div wire:click="supervise" style="cursor:pointer;" class="col-md-12 offset-md-0">
                                                                                                    <i class="fas fa-spinner"></i><b> Progress of Supervision</b>
                                                                                                    <i>
                                                                                                        Click to unfold/fold
                                                                                                    </i>
                                                                                                    <i class="fa fa-arrow-circle-down fa-sm" style="color:blue; cursor:pointer;" aria-hidden="true"></i>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 offset-md-0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-11 border-bottom border-top offset-md-0">
                                                                                                            <i class="text-success">JKR</i>
                                                                                                            <button wire:click="$emit('createSuperviseDiscussion', 2302)" class="btn btn-sm"><i class="fas fa-plus-circle"></i> Add Meeting</button>


                                                                                                            <a wire:click="bypassMeeting(2302)" style="cursor: pointer"><i class="fa fa-check fa-xs" style="color:green" aria-hidden="true"></i> bypass</a>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12 offset-md-1">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <br>
                                                                                            <div wire:id="CIl8QFAX6xw2n5VA2rdx">


                                                                                                <!-- Modal -->
                                                                                                <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                                                        <div class="modal-content">
                                                                                                            <div class="modal-header">
                                                                                                                <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                                                <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                    <span aria-hidden="true">×</span>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <div class="modal-body">
                                                                                                                <div>
                                                                                                                    <script>
                                                                                                                        window.setTimeout(function() {
                                                                                                                            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                                                $(this).remove();
                                                                                                                            });
                                                                                                                        }, 5000);
                                                                                                                    </script>

                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="supervisionTopic">Topic</label>
                                                                                                                                <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-12">
                                                                                                                            <div class="form-check">
                                                                                                                                <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                                                <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12">
                                                                                                                        <div class="form-group" wire:ignore="">
                                                                                                                            <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-md-12 text-right">
                                                                                                                        <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <script>
                                                                                                    window.livewire.on('superviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('show');
                                                                                                    });
                                                                                                    window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                                        $('#superviseDiscussionModal').modal('hide');
                                                                                                    });
                                                                                                    window.livewire.on('resetDiscussionMessage', () => {
                                                                                                        $("#discussionMessage").summernote('reset');
                                                                                                    });
                                                                                                    $('#discussionMessage').summernote({
                                                                                                        tabsize: 2,
                                                                                                        height: 60,
                                                                                                        toolbar: [
                                                                                                            ['style', ['style']],
                                                                                                            ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                                            ['color', ['color']],
                                                                                                            //['para', ['ul', 'ol', 'paragraph']],
                                                                                                            //['table', ['table']],
                                                                                                            //['insert', ['link', 'picture', 'video']],
                                                                                                            ['view', ['fullscreen', 'help']]
                                                                                                            //['view', ['fullscreen', 'codeview', 'help']]
                                                                                                        ],
                                                                                                        callbacks: {
                                                                                                            onChange: function(contents, $editable) {
                                                                                                                window.livewire.find('CIl8QFAX6xw2n5VA2rdx').set('discussionMessage', contents);
                                                                                                            }
                                                                                                        }
                                                                                                    });
                                                                                                </script>
                                                                                            </div>
                                                                                            <!-- Livewire Component wire-end:CIl8QFAX6xw2n5VA2rdx -->
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:UsN2pudQs4yHXeMZxz7c -->
                                                                                    </div>
                                                                                    <div class="col-md-4 offset-md-0">
                                                                                        <div wire:id="sh8OAv1BRpHV2RR2eIkd">
                                                                                            <div wire:key="$research->id">

                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b> Approval Seminar</b>
                                                                                                        <br>
                                                                                                        <i class="fa fa-check-circle fa-xs" style="color:green" aria-hidden="true"></i>
                                                                                                        Seminar |
                                                                                                        JKR

                                                                                                        <br>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:sh8OAv1BRpHV2RR2eIkd -->
                                                                                        <hr>
                                                                                        <div wire:id="7CZdZqM2exYSGT7zoClf">
                                                                                            <div wire:key="$research->id">
                                                                                                <hr>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12 offset-md-0">
                                                                                                        <b>Applied Event</b>
                                                                                                        <br>
                                                                                                        EE seminar
                                                                                                        11-01-2023
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <!-- Livewire Component wire-end:7CZdZqM2exYSGT7zoClf -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div wire:id="qgDkr3EdMCMWU6sUq8gD">


                                                                            <!-- Modal -->
                                                                            <div wire:ignore.self="" class="modal fade" id="superviseDiscussionModal" tabindex="-1" role="dialog" aria-labelledby="superviseDiscussionModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                                                                <div class="modal-dialog modal-lg" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="superviseDiscussionModal">Create Supervise Topic</h5>
                                                                                            <button type="button" wire:clock="close" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">×</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div>
                                                                                                <script>
                                                                                                    window.setTimeout(function() {
                                                                                                        $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                                                                                            $(this).remove();
                                                                                                        });
                                                                                                    }, 5000);
                                                                                                </script>

                                                                                            </div>
                                                                                            <div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-group">
                                                                                                            <label for="supervisionTopic">Topic</label>
                                                                                                            <input type="text" class="form-control" wire:model="supervisionTopic" id="supervisionTopic" placeholder="Enter topic">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div class="form-check">
                                                                                                            <input type="checkbox" class="form-check-input" wire:model="shareDiscussion">
                                                                                                            <label class="form-check-label" for="shareDiscussion">Share with other supervisor?</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="form-group" wire:ignore="">
                                                                                                        <textarea type="text" wire:model="discussionMessage" input="discussionMessage" name="discussionMessage" id="discussionMessage" class="discussionMessage"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-12 text-right">
                                                                                                    <button type="button" wire:click.prevent="superviseCreate" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i> Create</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <script>
                                                                                window.livewire.on('superviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('show');
                                                                                });
                                                                                window.livewire.on('closeSuperviseDiscussionModal', () => {
                                                                                    $('#superviseDiscussionModal').modal('hide');
                                                                                });
                                                                                window.livewire.on('resetDiscussionMessage', () => {
                                                                                    $("#discussionMessage").summernote('reset');
                                                                                });
                                                                                $('#discussionMessage').summernote({
                                                                                    tabsize: 2,
                                                                                    height: 60,
                                                                                    toolbar: [
                                                                                        ['style', ['style']],
                                                                                        ['font', ['bold', 'underline', 'italic', 'clear']],
                                                                                        ['color', ['color']],
                                                                                        //['para', ['ul', 'ol', 'paragraph']],
                                                                                        //['table', ['table']],
                                                                                        //['insert', ['link', 'picture', 'video']],
                                                                                        ['view', ['fullscreen', 'help']]
                                                                                        //['view', ['fullscreen', 'codeview', 'help']]
                                                                                    ],
                                                                                    callbacks: {
                                                                                        onChange: function(contents, $editable) {
                                                                                            window.livewire.find('qgDkr3EdMCMWU6sUq8gD').set('discussionMessage', contents);
                                                                                        }
                                                                                    }
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                        <!-- Livewire Component wire-end:qgDkr3EdMCMWU6sUq8gD -->
                                                                    </div>

                                                                    <!-- Livewire Component wire-end:oZNoPgJatmI5vCU0HPyK -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Livewire Component wire-end:f3VaJdms6Ak8sfixVZPT -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Livewire Component wire-end:Kyh8l5CIuDnDC5e6I1pt -->
    </div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>





<div id="sidebar-overlay"></div>
</div>
</div>
@endsection