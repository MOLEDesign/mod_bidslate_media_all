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
            <li uk-filter-control="filter: [data-type='1']; group: data-type"><a href="#"><?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_FILTER_TYPE_FEATURE'); ?></a></li>
            <li uk-filter-control="filter: [data-type='2']; group: data-type"><a href="#"><?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_FILTER_TYPE_SHORT'); ?></a></li>
            <li uk-filter-control="filter: [data-type='3']; group: data-type"><a href="#"><?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_FILTER_TYPE_SERIES'); ?></a></li>

            <li uk-filter-control="filter: [data-status='1']; group : data-status"><a href="#"><?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_FILTER_STATUS_PUBLISHED'); ?></a></li>
            <li uk-filter-control="filter: [data-status='0']; group : data-status"><a href="#"><?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_FILTER_STATUS_UNPUBLISHED'); ?></a></li>
            <li uk-filter-control="filter: [data-status='2']; group : data-status"><a href="#"><?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_FILTER_STATUS_ARCHIVED'); ?></a></li>
        </ul>
        <ul class="uk-nav-center uk-subnav uk-subnav-pill uk-flex-right">

            <li uk-filter-control="sort: data-title"><a href="#"><?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_FILTER_ORDER_TITLE_ASC'); ?></a></li>
            <li uk-filter-control="sort: data-title; order: desc"><a href="#"><?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_FILTER_ORDER_TITLE_DESC'); ?></a></li>

            <li uk-filter-control="sort: data-date"><a href="#"><?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_FILTER_ORDER_DATE_ASC'); ?></a></li>
            <li uk-filter-control="sort: data-date; order: desc"><a href="#"><?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_FILTER_ORDER_DATE_DESC'); ?></a></li>

        </ul>
    </div>

    <div class="uk-width-1-1@m uk-first-column">

        <div class="uk-panel" data-id="bidslate-content-grid">

            <ul class="uk-list bidslate-content-header">
                <li class="uk-accordion-title">

                    <div class="list-portfolio-title">
                        <?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_TITLE'); ?>
                    </div>
                    <div class="list-portfolio-type">
                        <?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_TYPE'); ?>
                    </div>
                    <div class="list-portfolio-date">
                        <?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_LAST_MODIFIED'); ?>
                    </div>
                    <div class="list-portfolio-status">
                        <?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_STATUS'); ?>
                    </div>

                </li>
            </ul>
            <ul class="uk-list uk-list-divider uk-list-striped content-filter" uk-accordion>

                <?php foreach ($titlearray as $title) { ?>

                    <li data-status="<?php echo $title['status']; ?>" data-type="<?php echo $title['type']; ?>" data-title="<?php echo $title['title']; ?>" data-date="<?php echo $title['last_modified']; ?>">
                        <a class="uk-accordion-title" href="#">
                            <div class="list-portfolio-title">
                                <?php echo $title['title']; ?>
                            </div>
                            <div class="list-portfolio-type">
                                <?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_TYPE_' . $title['type_text']); ?>
                            </div>
                            <div class="list-portfolio-date">
                                <?php echo $title['last_modified']; ?>
                            </div>
                            <div class="list-portfolio-status">
                                <?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_STATUS_' . $title['status_text']); ?>
                            </div>
                        </a>

                        <div class="uk-accordion-content">
                            <div uk-grid>
                                <div class="uk-width-1-3@m uk-first-column">
                                    <img class="list-portfolio-image" src="https://storage.googleapis.com/bidslate_production_bucket/4548_0a10f7e836fe704f20e3d286268b1510.jpg" alt=""/>
                                </div>
                                <div class="uk-width-2-3@m">
                                    <h1>
                                        <?php echo $title->title; ?>
                                    </h1>
                                    <table class="uk-table uk-table-striped">

                                        <tbody>
                                            <?php foreach ($checklistarray as $check) { ?>
                                                <tr>
                                                    <td><?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_CHECK_' . $check['label']); ?></td>
                                                    <td><?php echo $title['file_' . $check['name']]; ?></td>
                                                    <td>
                                                        <?php if ($title['file_' . $check['name']]) { ?>
                                                            <button class="uk-button uk-button-danger uk-button-small"><?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_BUTTON_REMOVE_FILE'); ?></button>
                                                        <?php } else { ?>
                                                            <button class="uk-button uk-button-default uk-button-small"><?php echo JText::_('MOD_BIDSLATE_MY_MEDIA_BUTTON_ALLOCATE_FILE'); ?></button>
                                                        <?php }; ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($title['file_' . $check['name']]) { ?>
                                                            <span uk-icon="icon: check"></span>
                                                        <?php } else { ?>
                                                            <span uk-icon="icon: close"></span>
                                                        <?php }; ?>
                                                    </td>
                                                </tr>
                                            <?php }; ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                    </li>

                <?php }; ?>


            </ul>
        </div>
    </div>
</div>

