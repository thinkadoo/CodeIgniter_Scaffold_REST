<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="wine">Listing</a></li>
                        <li class="{if $action_mode == 'create'}active{/if}"><a href="wine/create/">New record</a></li>
                    </ul>
                </div>

                <div class="content">
                    <div class="inner">
                        {if $action_mode == 'create'}
                            <h3>Add new record</h3>
                        {else}
                            <h3>Edit record: #{$record_id}</h3>
                        {/if}
                        {if isset($errors)}
                            <div class="flash">
                                <div class="message error">
                                    <p>{$errors}</p>
                                </div>
                            </div>
                        {/if}

                        <form class="form" method='post' action='wine/{$action_mode}/{if isset($record_id)}{$record_id}{/if}' enctype="multipart/form-data">

                            
    	<div class="group">
            <label class="label">{$wine_fields.name}</label>
    		<div>
    	       	<input class="text_field" type="text" maxlength="255" value="{if isset($wine_data)}{$wine_data.name}{/if}" name="name" />
    		</div>
    		
    	</div>
    
    	<div class="group">
            <label class="label">{$wine_fields.year}</label>
    		<div>
    	       	<input class="text_field" type="text" maxlength="255" value="{if isset($wine_data)}{$wine_data.year}{/if}" name="year" />
    		</div>
    		
    	</div>
    
    	<div class="group">
            <label class="label">{$wine_fields.grapes}</label>
    		<div>
    	       	<input class="text_field" type="text" maxlength="255" value="{if isset($wine_data)}{$wine_data.grapes}{/if}" name="grapes" />
    		</div>
    		
    	</div>
    
    	<div class="group">
            <label class="label">{$wine_fields.country}</label>
    		<div>
    	       	<input class="text_field" type="text" maxlength="255" value="{if isset($wine_data)}{$wine_data.country}{/if}" name="country" />
    		</div>
    		
    	</div>
    
    	<div class="group">
            <label class="label">{$wine_fields.region}</label>
    		<div>
    	       	<input class="text_field" type="text" maxlength="255" value="{if isset($wine_data)}{$wine_data.region}{/if}" name="region" />
    		</div>
    		
    	</div>
    
    	<div class="group">
            <label class="label">{$wine_fields.description}</label>
    		<div>
    	       	<input class="text_field" type="text" maxlength="255" value="{if isset($wine_data)}{$wine_data.description}{/if}" name="description" />
    		</div>
    		
    	</div>
    
    	<div class="group">
            <label class="label">{$wine_fields.picture}</label>
    		<div>
    	       	<input class="text_field" type="text" maxlength="255" value="{if isset($wine_data)}{$wine_data.picture}{/if}" name="picture" />
    		</div>
    		
    	</div>
    

                            <div class="group navform wat-cf">
                                    <button class="button" type="submit">
                                        <img src="iscaffold/backend_skins/images/icons/tick.png" alt="Save"> Save
                                    </button>
                                    <span class="text_button_padding">or</span>
                                    <a class="text_button_padding link_button" href="javascript:window.history.back();">Cancel</a>
                            </div>
                        </form>
                    </div><!-- .inner -->
                </div><!-- .content -->
            </div><!-- .block -->
