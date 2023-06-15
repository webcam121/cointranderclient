<?php

class __MyTemplates_b524a47d19ac52013a15b987fd180c95 extends Mustache_Template
{
    private $lambdaHelper;
    protected $strictCallables = true;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '<style>
';
        $buffer .= $indent . '.layout{
';
        $buffer .= $indent . '    margin-top: 15px;
';
        $buffer .= $indent . '    padding: 10px;
';
        $buffer .= $indent . '    text-color: white;
';
        $buffer .= $indent . '    border: solid 1px #054ab3;
';
        $buffer .= $indent . '    border-radius: 30px;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '</style>
';
        // 'data' section
        $value = $context->find('data');
        $buffer .= $this->section125e12e05b4caa75d72f225741f89ac2($context, $indent, $value);

        return $buffer;
    }

    private function section8084dd65097858f28d09b082110a19ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                                            <img src={{userPhoto}}>
                                                        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                            <img src=';
                $value = $this->resolveValue($context->find('userPhoto'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section593a14d0bb1b65ab4e90c0e9b258bfb1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar xs bg-primary">
                                                        {{#hasPhoto}}
                                                            <img src={{userPhoto}}>
                                                        {{/hasPhoto}}
                                                        {{^hasPhoto}}
                                                            <span>{{userPhoto}}</span>
                                                        {{/hasPhoto}}
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="lead-text">{{firstName}} &nbsp; {{lastName}}</span>
                                                        <span class="sub-text">{{email}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="nk-tb-col tb-col-lg">
                                                <span>{{dateCreated}}</span>
                                            </div>
                                            
                                            <div class="nk-tb-col">
                                                <div class="d-none d-md-inline">
                                                    <a href="/agentUserDetails?userId={{id}}" class="link link-sm"><span>Client View</span></a>
                                                    <a href="#" id="{{id}}" class="removeUser link link-sm link-danger"><span>Remove</span></a>
                                                </div>
                                            </div>
                                        </div><!-- .nk-tb-item -->

                                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <div class="nk-tb-item">
';
                $buffer .= $indent . '                                            <div class="nk-tb-col">
';
                $buffer .= $indent . '                                                <div class="user-card">
';
                $buffer .= $indent . '                                                    <div class="user-avatar xs bg-primary">
';
                // 'hasPhoto' section
                $value = $context->find('hasPhoto');
                $buffer .= $this->section8084dd65097858f28d09b082110a19ed($context, $indent, $value);
                // 'hasPhoto' inverted section
                $value = $context->find('hasPhoto');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                                            <span>';
                    $value = $this->resolveValue($context->find('userPhoto'), $context, $indent);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</span>
';
                }
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                    <div class="user-name">
';
                $buffer .= $indent . '                                                        <span class="lead-text">';
                $value = $this->resolveValue($context->find('firstName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' &nbsp; ';
                $value = $this->resolveValue($context->find('lastName'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                        <span class="sub-text">';
                $value = $this->resolveValue($context->find('email'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                    </div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            
';
                $buffer .= $indent . '                                            <div class="nk-tb-col tb-col-lg">
';
                $buffer .= $indent . '                                                <span>';
                $value = $this->resolveValue($context->find('dateCreated'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            
';
                $buffer .= $indent . '                                            <div class="nk-tb-col">
';
                $buffer .= $indent . '                                                <div class="d-none d-md-inline">
';
                $buffer .= $indent . '                                                    <a href="/agentUserDetails?userId=';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="link link-sm"><span>Client View</span></a>
';
                $buffer .= $indent . '                                                    <a href="#" id="';
                $value = $this->resolveValue($context->find('id'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="removeUser link link-sm link-danger"><span>Remove</span></a>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div><!-- .nk-tb-item -->
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section125e12e05b4caa75d72f225741f89ac2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (is_object($value) && is_callable($value)) {
            $source = '
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-content-wrap">
                        <div class="nk-block-head nk-block-head-lg">
                            <div class="nk-block-between-md g-4">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-tle fw-normal">Agent Account</h2>
                                    <div class="nk-block-des">
                                        <p>You can add and remove agent users as you want.</p>
                                    </div>
                                    <div class="nk-block-des">
                                        
                                        <a href="#" class="link link-primary layout" id="composeMessage" data-toggle="modal" data-target="#create-agent-account"><em class="icon ni ni-plus"></em> <span>Create Agent Account</span></a>
                                                                          
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="card-inner p-0">
                                <div class="nk-tb-list nk-tb-ulist is-compact">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col"><span class="sub-text">User</span></div>
                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Date Joined</span></div>
                                        <div class="nk-tb-col"><span class="sub-text">Action</span></div>
                                    </div><!-- .nk-tb-item -->
                                    {{#users}}
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar xs bg-primary">
                                                        {{#hasPhoto}}
                                                            <img src={{userPhoto}}>
                                                        {{/hasPhoto}}
                                                        {{^hasPhoto}}
                                                            <span>{{userPhoto}}</span>
                                                        {{/hasPhoto}}
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="lead-text">{{firstName}} &nbsp; {{lastName}}</span>
                                                        <span class="sub-text">{{email}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="nk-tb-col tb-col-lg">
                                                <span>{{dateCreated}}</span>
                                            </div>
                                            
                                            <div class="nk-tb-col">
                                                <div class="d-none d-md-inline">
                                                    <a href="/agentUserDetails?userId={{id}}" class="link link-sm"><span>Client View</span></a>
                                                    <a href="#" id="{{id}}" class="removeUser link link-sm link-danger"><span>Remove</span></a>
                                                </div>
                                            </div>
                                        </div><!-- .nk-tb-item -->

                                    {{/users}}
                                </div><!-- .nk-tb-list -->
                            </div><!-- .card-inner -->
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="modal fade" id="myModaldeleteuser" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-body">
                        <p style="text-align: center;">Do you want to remove this user?</p>
                    </div>
                    <div class="modal-footer" style="text-align: center;display: unset">
                        <a class="deleteuserurl btn btn-primary" type="button" href="">Delete</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .tb-member-action .d-md-inline a {
            font-size: 13px;
            margin-right: 10px;
        }
    </style>

    <script>
        $(document).ready(function() {

            $(\'.removeUser\').on(\'click\', function(){
                $(".deleteuserurl").attr("href", "./agentUserDelete?userId="+ $(this).attr(\'id\'));
                $("#myModaldeleteuser").modal(\'show\');
                //     if (confirm(\'Do you want to remove this user?\')) {
                //         location.href = "/adminUserDelete?userId="+ $(this).attr(\'id\');
                //     }
            });
        });
    </script>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="nk-content ">
';
                $buffer .= $indent . '        <div class="container-fluid">
';
                $buffer .= $indent . '            <div class="nk-content-inner">
';
                $buffer .= $indent . '                <div class="nk-content-body">
';
                $buffer .= $indent . '                    <div class="nk-content-wrap">
';
                $buffer .= $indent . '                        <div class="nk-block-head nk-block-head-lg">
';
                $buffer .= $indent . '                            <div class="nk-block-between-md g-4">
';
                $buffer .= $indent . '                                <div class="nk-block-head-content">
';
                $buffer .= $indent . '                                    <h2 class="nk-tle fw-normal">Agent Account</h2>
';
                $buffer .= $indent . '                                    <div class="nk-block-des">
';
                $buffer .= $indent . '                                        <p>You can add and remove agent users as you want.</p>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="nk-block-des">
';
                $buffer .= $indent . '                                        
';
                $buffer .= $indent . '                                        <a href="#" class="link link-primary layout" id="composeMessage" data-toggle="modal" data-target="#create-agent-account"><em class="icon ni ni-plus"></em> <span>Create Agent Account</span></a>
';
                $buffer .= $indent . '                                                                          
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="nk-block">
';
                $buffer .= $indent . '                            <div class="card-inner p-0">
';
                $buffer .= $indent . '                                <div class="nk-tb-list nk-tb-ulist is-compact">
';
                $buffer .= $indent . '                                    <div class="nk-tb-item nk-tb-head">
';
                $buffer .= $indent . '                                        <div class="nk-tb-col"><span class="sub-text">User</span></div>
';
                $buffer .= $indent . '                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Date Joined</span></div>
';
                $buffer .= $indent . '                                        <div class="nk-tb-col"><span class="sub-text">Action</span></div>
';
                $buffer .= $indent . '                                    </div><!-- .nk-tb-item -->
';
                // 'users' section
                $value = $context->find('users');
                $buffer .= $this->section593a14d0bb1b65ab4e90c0e9b258bfb1($context, $indent, $value);
                $buffer .= $indent . '                                </div><!-- .nk-tb-list -->
';
                $buffer .= $indent . '                            </div><!-- .card-inner -->
';
                $buffer .= $indent . '                           
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div class="container">
';
                $buffer .= $indent . '        <div class="modal fade" id="myModaldeleteuser" role="dialog">
';
                $buffer .= $indent . '            <div class="modal-dialog modal-sm">
';
                $buffer .= $indent . '                <div class="modal-content">
';
                $buffer .= $indent . '                    <div class="modal-body">
';
                $buffer .= $indent . '                        <p style="text-align: center;">Do you want to remove this user?</p>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="modal-footer" style="text-align: center;display: unset">
';
                $buffer .= $indent . '                        <a class="deleteuserurl btn btn-primary" type="button" href="">Delete</a>
';
                $buffer .= $indent . '                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <style>
';
                $buffer .= $indent . '        .tb-member-action .d-md-inline a {
';
                $buffer .= $indent . '            font-size: 13px;
';
                $buffer .= $indent . '            margin-right: 10px;
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    </style>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <script>
';
                $buffer .= $indent . '        $(document).ready(function() {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            $(\'.removeUser\').on(\'click\', function(){
';
                $buffer .= $indent . '                $(".deleteuserurl").attr("href", "./agentUserDelete?userId="+ $(this).attr(\'id\'));
';
                $buffer .= $indent . '                $("#myModaldeleteuser").modal(\'show\');
';
                $buffer .= $indent . '                //     if (confirm(\'Do you want to remove this user?\')) {
';
                $buffer .= $indent . '                //         location.href = "/adminUserDelete?userId="+ $(this).attr(\'id\');
';
                $buffer .= $indent . '                //     }
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    </script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
