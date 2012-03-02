<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="wine">Listing</a></li>
                        <li><a href="wine/create/">New record</a></li>
                    </ul>
                </div>

                <div class="content">
                    <div class="inner">
						<h3>Details of {$table_name}, record #{$id}</h3>

						<table class="table" width="50%">
                        	<thead>
                                <th width="20%">Field</th>
                                <th>Value</th>
                        	</thead>
						    <tr class="{cycle values='odd,even'}">
                    <td>{$wine_fields.id}:</td>
                    <td>{$wine_data.id}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$wine_fields.name}:</td>
                    <td>{$wine_data.name}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$wine_fields.year}:</td>
                    <td>{$wine_data.year}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$wine_fields.grapes}:</td>
                    <td>{$wine_data.grapes}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$wine_fields.country}:</td>
                    <td>{$wine_data.country}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$wine_fields.region}:</td>
                    <td>{$wine_data.region}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$wine_fields.description}:</td>
                    <td>{$wine_data.description}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$wine_fields.picture}:</td>
                    <td>{$wine_data.picture}</td>
                </tr>
						</table>
                        <div class="actions-bar wat-cf">
                            <div class="actions">
                                <a class="button" href="wine/edit/{$id}">
                                    <img src="iscaffold/backend_skins/images/icons/application_edit.png" alt="Edit record"> Edit record
                                </a>
                            </div>
                        </div>
                    </div><!-- .inner -->
                </div><!-- .content -->
            </div><!-- .block -->
