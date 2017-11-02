<?php if (!defined('THINK_PATH')) exit();?>

                                        <div class="tabbable portlet-tabs">
                                            <ul class="nav nav-tabs">
                                                <li class="active" style="height: 50px"></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="portlet_tab1">
                                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                    <div class="portlet">
                                                        <div class="portlet-body">
                                                            <div class="clearfix"></div>
                                                            <div class="span6" style="margin-left:2px">
                                                                <span id="y_span1">搜索：</span><input style="height: 25px;" type="text" value="<?php echo ($title); ?>">
                                                                <button class="y_btn">确认</button>
                                                            </div>
                                                            <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                                <?php if($table == Activity ): ?><thead>
                                                                <tr>
                                                                    <th>标题</th>
                                                                    <th>摘要</th>
                                                                    <th>主办</th>
                                                                    <th>操作</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr class="">
                                                                    <td><a href="javascript:;" class="contentAlert"><?php echo ($val["title"]); ?></a></td>

                                                                    <td><?php echo ($val["description"]); ?></td>
                                                                    <td><?php echo ($val["sponsor"]); ?></td>
                                                                    <td>
                                                                    	<input type="hidden" class="id" name="field＿name" value="<?php echo ($val["id"]); ?>"> 
                                                                   		<input type="hidden" name="field＿name" value="<?php echo ($state); ?>"> 
                                                                   		<a class="y_clolor_blue" href="javascript:;" style="display: inline-block">查看</a>
                                                                        <a class="y_clolor_red" href="javascript:;" style="display: inline-block">删除</a>
                                                                        <a class="y_clolor_yellow" href="javascript:;" style="display: inline-block">修改</a>                                   
                                                                    </td>
                                                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                                                </tbody>
                                                                <?php elseif($table == Project): ?>
                                                                <thead>
                                                                <tr>
                                                                    <th>项目名称</th>
                                                                    <th>摘要</th>
                                                                    <th>联系人</th>
                                                                    <th>操作</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr class="">
                                                                    <td><a href="javascript:;" class="contentAlert"><?php echo ($val["title"]); ?></a></td>

                                                                    <td><?php echo ($val["description"]); ?></td>
                                                                    <td><?php echo ($val["people"]); ?></td>
                                                                    <td>
                                                                    	<input type="hidden" class="id" name="field＿name" value="<?php echo ($val["id"]); ?>"> 
                                                                   		<input type="hidden" name="field＿name" value="<?php echo ($state); ?>"> 
                                                                   		<a class="y_clolor_blue" href="javascript:;" style="display: inline-block">查看</a>
                                                                        <a class="y_clolor_red" href="javascript:;" style="display: inline-block">删除</a>
                                                                        <a class="y_clolor_yellow" href="javascript:;" style="display: inline-block">修改</a>
                                                                        <a class="y_clolor_green" href="javascript:;" style="display: inline-block">推送</a>
                                                                    </td>
                                                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                                                </tbody>
                                                                <?php else: ?>
                                                                <thead> 
                                                                <tr>
                                                                    <th>标题</th>
                                                                    <th>摘要</th>
                                                                    <th>来源</th>
                                                                    <th>操作</th>
                                                                </tr>  
                                                                </thead>
                                                                <tbody>
                                                                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><tr class="">
                                                                    <td><a href="javascript:;" class="contentAlert"><?php echo ($value["title"]); ?></a></td>
                                                                    <td><?php echo ($value["description"]); ?></td>
                                                                    <td><?php echo ($value["from"]); ?></td>
                                                                    <td>
                                                                    	<input type="hidden" class="id" name="field＿name" value="<?php echo ($value["id"]); ?>"> 
                                                                   		<input type="hidden" class="state" name="field＿name" value="<?php echo ($state); ?>">
                                                                        <a class="y_clolor_blue" href="javascript:;" style="display: inline-block">查看</a>
                                                                        <a class="y_clolor_red" href="javascript:;" style="display: inline-block">删除</a>
                                                                        <a class="y_clolor_yellow" href="javascript:;" style="display: inline-block">修改</a>
                                                                        <a class="y_clolor_green" href="javascript:;" style="display: inline-block">推送</a>
                                                                    </td>
                                                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                                                </tbody><?php endif; ?>
                                                                
                                                            </table>
                                                            <div>
                                                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END EXAMPLE TABLE PORTLET-->
                                                </div>
                                                <!--<div class="tab-pane" id="portlet_tab2">

                                                    <p>

                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo.

                                                    </p>

                                                    <p>

                                                        <a class="btn red" href="ui_tabs_accordions.html#portlet_tab2" target="_blank">Activate this tab via URL</a>

                                                    </p>

                                                </div>
                                                <div class="tab-pane" id="portlet_tab3">

                                                    <p>

                                                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.

                                                    </p>

                                                    <p>

                                                        <a class="btn blue" href="ui_tabs_accordions.html#portlet_tab3" target="_blank">Activate this tab via URL</a>

                                                    </p>

                                                </div>
                                                <div class="tab-pane" id="portlet_tab4">

                                                    <p>

                                                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.

                                                    </p>

                                                    <p>

                                                        <a class="btn blue" href="ui_tabs_accordions.html#portlet_tab3" target="_blank">Activate this tab via URL</a>

                                                    </p>

                                                </div>-->
                                            </div>