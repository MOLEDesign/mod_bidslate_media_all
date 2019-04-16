<?php
defined('_JEXEC') or die;

?>

<div uk-grid>
    <div class="uk-width-1-1@m">
        <div class="uk-margin uk-text-right uk-scrollspy-inview uk-animation-fade" uk-scrollspy-class="" data-id="page#9" style="">
            <div class="uk-flex-middle uk-grid-small uk-child-width-auto uk-flex-right uk-grid" uk-grid="">
                <div class="el-item uk-first-column">
                    <a class="el-content uk-button uk-button-default">
                        <span uk-icon="plus-circle" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="plus-circle"><circle fill="none" stroke="#000" stroke-width="1.1" cx="9.5" cy="9.5" r="9"></circle><line fill="none" stroke="#000" x1="9.5" y1="5" x2="9.5" y2="14"></line><line fill="none" stroke="#000" x1="5" y1="9.5" x2="14" y2="9.5"></line></svg></span>
                        <span class="uk-text-middle"><?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_BUTTON_MANAGE_ALL_MEDIA'); ?></span>
                    </a>
                </div>

                <div class="el-item">
                    <a class="el-content uk-button uk-button-danger" href="/index.php/dashboard">
                        <span uk-icon="reply" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="reply"><path d="M17.7,13.11 C16.12,10.02 13.84,7.85 11.02,6.61 C10.57,6.41 9.75,6.13 9,5.91 L9,2 L1,9 L9,16 L9,12.13 C10.78,12.47 12.5,13.19 14.09,14.25 C17.13,16.28 18.56,18.54 18.56,18.54 C18.56,18.54 18.81,15.28 17.7,13.11 L17.7,13.11 Z M14.82,13.53 C13.17,12.4 11.01,11.4 8,10.92 L8,13.63 L2.55,9 L8,4.25 L8,6.8 C8.3,6.86 9.16,7.02 10.37,7.49 C13.3,8.65 15.54,10.96 16.65,13.08 C16.97,13.7 17.48,14.86 17.68,16 C16.87,15.05 15.73,14.15 14.82,13.53 L14.82,13.53 Z"></path></svg></span>
                        <span class="uk-text-middle"><?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_BUTTON_DASHBOARD'); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div uk-grid uk-filter="target: .content-filter">

    <div class="uk-width-1-1@m uk-first-column">
        <ul class="uk-nav-center uk-subnav uk-subnav-pill uk-flex-right">
            <li uk-filter-control=""><a href="#"><?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_FILTER_ALL'); ?></a></li>
            <li uk-filter-control="filter: [data-type='1']; group: data-type"><a href="#"><?php echo JText::_('MOD_BIDSLATE_MEDIA_ALL_FILTER_TYPE_MOVIES'); ?></a></li>
            <li uk-filter-control="filter: [data-type='2']; group: data-type"><a href="#"><?php echo JText::_('MOD_BIDSLATE_MEDIA_ALL_FILTER_TYPE_GRAPHICS'); ?></a></li>
            <li uk-filter-control="filter: [data-type='3']; group: data-type"><a href="#"><?php echo JText::_('MOD_BIDSLATE_MEDIA_ALL_FILTER_TYPE_OTHER'); ?></a></li>

            <li uk-filter-control="filter: [data-status='1']; group : data-status"><a href="#"><?php echo JText::_('MOD_BIDSLATE_MEDIA_ALL_FILTER_STATUS_PUBLISHED'); ?></a></li>
            <li uk-filter-control="filter: [data-status='0']; group : data-status"><a href="#"><?php echo JText::_('MOD_BIDSLATE_MEDIA_ALL_FILTER_STATUS_UNPUBLISHED'); ?></a></li>
            <li uk-filter-control="filter: [data-status='2']; group : data-status"><a href="#"><?php echo JText::_('MOD_BIDSLATE_MEDIA_ALL_FILTER_STATUS_ARCHIVED'); ?></a></li>
        </ul>
        <ul class="uk-nav-center uk-subnav uk-subnav-pill uk-flex-right">

            <li uk-filter-control="sort: data-title"><a href="#"><?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_FILTER_ORDER_TITLE_ASC'); ?></a></li>
            <li uk-filter-control="sort: data-title; order: desc"><a href="#"><?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_FILTER_ORDER_TITLE_DESC'); ?></a></li>

            <li uk-filter-control="sort: data-date"><a href="#"><?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_FILTER_ORDER_DATE_ASC'); ?></a></li>
            <li uk-filter-control="sort: data-date; order: desc"><a href="#"><?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_FILTER_ORDER_DATE_DESC'); ?></a></li>

        </ul>
    </div>

    <ul class="uk-list bidslate-content-header">
        <li class="uk-accordion-title">

            <div class="list-portfolio-title">
                <?php echo JText::_('MOD_BIDSLATE_MY_CONTENT_TITLE'); ?>
            </div>
            <div class="list-portfolio-type">
                <?php echo JText::_('MOD_BIDSLATE_MY_CONTENT_TYPE'); ?>
            </div>
            <div class="list-portfolio-date">
                <?php echo JText::_('MOD_BIDSLATE_MY_CONTENT_LAST_MODIFIED'); ?>
            </div>
            <div class="list-portfolio-status">
                <?php echo JText::_('MOD_BIDSLATE_MY_CONTENT_STATUS'); ?>
            </div>

        </li>
    </ul>
    <ul class="uk-list uk-list-divider uk-list-striped content-filter" uk-accordion>

        <?php foreach ($titlearray as $title) { ?>

            <ul class="uk-list">
                <li class="uk-accordion-title">
                    <div class="list-portfolio-title">Title</div>
                    <div class="list-portfolio-type">Type</div>
                    <div class="list-portfolio-date">Last Modified</div>
                    <div class="list-portfolio-status">Status</div>
                </li>
            </ul>
            <ul class="uk-list uk-list-divider uk-list-striped">
                <li>
                    <div class="list-portfolio-title">Show Business</div>
                    <div class="list-portfolio-type">Feature</div>
                    <div class="list-portfolio-date">23 March 2019</div>
                    <div class="list-portfolio-status">14 Items</div>
                    <div class="uk-accordion-content">
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <h1>Show Business</h1>
                                <table class="uk-table uk-table-striped">
                                    <thead>
                                    <tr>
                                        <th>Filename</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>File Viewer</th>
                                        <th> </th>
                                        <th> </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>file_001.png</td>
                                        <td>Poster Art</td>
                                        <td>Processing</td>
                                        <td><a class="uk-button uk-button-default">View</a></td>
                                        <td><a class="uk-button uk-button-secondary">Edit</a></td>
                                        <td><a class="uk-button uk-button-danger">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>file_001.mov</td>
                                        <td>Feature</td>
                                        <td>Processing</td>
                                        <td><a class="uk-button uk-button-default">View</a></td>
                                        <td><a class="uk-button uk-button-warning">Edit</a></td>
                                        <td><a class="uk-button uk-button-danger">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>file_001.mov</td>
                                        <td>Trailer</td>
                                        <td>Processing</td>
                                        <td><a class="uk-button uk-button-default">View</a></td>
                                        <td><a class="uk-button uk-button-info">Edit</a></td>
                                        <td><a class="uk-button uk-button-danger">Delete</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="list-portfolio-title">Worth</div>
                    <div class="list-portfolio-type">Feature</div>
                    <div class="list-portfolio-date">23 March 2019</div>
                    <div class="list-portfolio-status">14 Items</div>
                    <div class="uk-accordion-content">
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <h1>Worth</h1>
                                <table class="uk-table uk-table-striped">
                                    <thead>
                                    <tr>
                                        <th>Filename</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>File Viewer</th>
                                        <th> </th>
                                        <th> </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>file_001.png</td>
                                        <td>Poster Art</td>
                                        <td>Complete</td>
                                        <td><a class="uk-button uk-button-default">View</a></td>
                                        <td><a class="uk-button uk-button-secondary">Edit</a></td>
                                        <td><a class="uk-button uk-button-danger">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>file_001.mov</td>
                                        <td>Feature</td>
                                        <td>Processing</td>
                                        <td><a class="uk-button uk-button-default">View</a></td>
                                        <td><a class="uk-button uk-button-warning">Edit</a></td>
                                        <td><a class="uk-button uk-button-danger">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>file_001.mov</td>
                                        <td>Trailer</td>
                                        <td>Processing</td>
                                        <td><a class="uk-button uk-button-default">View</a></td>
                                        <td><a class="uk-button uk-button-info">Edit</a></td>
                                        <td><a class="uk-button uk-button-danger">Delete</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </li>

                `
                <li>
                    <div class="list-portfolio-title">Unallocated Media</div>
                    <div class="list-portfolio-type"> </div>
                    <div class="list-portfolio-date"> </div>
                    <div class="list-portfolio-status">99 Items</div>
                    <div class="uk-accordion-content">
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <h1>Unallocated</h1>
                                <table class="uk-table uk-table-striped">
                                    <thead>
                                    <tr>
                                        <th>Filename</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>File Viewer</th>
                                        <th> </th>
                                        <th> </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>file_001.png</td>
                                        <td>Poster Art</td>
                                        <td>Processing</td>
                                        <td><a class="uk-button uk-button-default">View</a></td>
                                        <td><a class="uk-button uk-button-secondary">Allocate</a></td>
                                        <td><a class="uk-button uk-button-danger">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>file_001.mov</td>
                                        <td>Feature</td>
                                        <td>Processing</td>
                                        <td><a class="uk-button uk-button-default">View</a></td>
                                        <td><a class="uk-button uk-button-warning">Allocate</a></td>
                                        <td><a class="uk-button uk-button-danger">Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>file_001.mov</td>
                                        <td>Trailer</td>
                                        <td>Processing</td>
                                        <td><a class="uk-button uk-button-default">View</a></td>
                                        <td><a class="uk-button uk-button-info">Unallocate</a></td>
                                        <td><a class="uk-button uk-button-danger">Delete</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

