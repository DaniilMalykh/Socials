<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/app/images/favicon.png"
        type="image/png" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/app/styles/applicationForm.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/app/styles/index.css" />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/app/styles/index-mobile.css" />

    <title>
        Socials - For You and Your Friends
    </title>
</head>

<body>
    <button onclick="topFunction()" id="toTopButton" title="Go to top"></button>
    <div class="header">
        <div class="header_logo-section">
            <img src="<?php echo get_template_directory_uri() ?>/app/images/logo/Logo.png" alt="" class="logo-image" />
        </div>
        <div class="header_navigation-section">
            <a href="#benefit-section" class="navigation-section_nav-button button-border">Benefits</a>
            <a href="#preview-section" class="navigation-section_nav-button button-border">Preview</a>
            <a href="#application-section" class="navigation-section_nav-button button-border">Apply for Beta Test</a>
            <a href="#FAQ-section" class="navigation-section_nav-button button-border">FAQ</a>
        </div>
    </div>
    <div class="main">
        <div class="main_welcome-section">
            <span class="welcome-section_header">
                THE MOST SIMPLE WAY<br />
                TO MEET YOUR FRIENDS
            </span>
            <span class="welcome-section_subheader">
                We will deal with the rest
            </span>
            <form action="GET" class="main_number-application-form">
                <span class="number-application-form_label">Submit the application and ask all the questions</span>
                <div class="requiredActions-section_telephone-input" id="application-form_input">
                    <div class="telephone-input_preNumber">+7</div>
                    <input type="text" class="telephone-input_number" maxlength="10" pattern="[0][0-9]" required />
                </div>
                <button class="number-application-form_button" id="earlyNumberApplicationButton">
                    Sumbit
                </button>
            </form>
        </div>
        <div class="main_intro-section">
            <span class="intro-section_text">
                <?php echo get_field('preview_text'); ?>
            </span>
        </div>
        <div class="main_services-section" id="benefit-section">
            <span class="services-section_header"> Benefits </span>
            <?php
if (have_rows('benefit_block')):
    while (have_rows('benefit_block')): the_row();?>
            <div class="services-section">
                <div class="section_content">

                    <div class="content-head"><?php echo get_sub_field('benefit_header'); ?></div>
                    <div class="content-body">
                        <?php echo get_sub_field('benefit_text'); ?>
                    </div>
                </div>
            </div>
            <?php endwhile;
endif;?>
            <div class="main_benefit-section" id="preview-section">
                <span class="services-section_header">Preview</span>
                <?php
if (have_rows('preview_block')):
    while (have_rows('preview_block')): the_row();?>
                <div class="services-section">
                    <div class="section_content">
                        <div class="content-head"><?php echo get_sub_field('preview_header'); ?></div>
                        <div class="content-body">
                            <img src="<?php echo get_sub_field('preview_image'); ?>" alt="">
                        </div>
                    </div>
                </div>
                <?php endwhile;
endif;?>
            </div>
            <div class="main_applicationForm-section" id="application-section">
                <div class="applicationForm">
                    <div class="applicationForm_advertismentInfo-section">
                        <span class="advertismentInfo-section_header">Sign Up For Free Beta-Test</span>
                        <span class="advertismentInfo-section_subheader">We Will Contact You And Deliver Your Personal
                            Invitation</span>
                    </div>
                    <form action="#" method="post" class="applicationForm_applyInfo-section">
                        <div class="applyInfo-section_requiredActions-section">
                            <div class="requiredActions-section_telephone-input">
                                <div class="telephone-input_preNumber">+7</div>
                                <input type="text" class="telephone-input_number" />
                            </div>
                            <button class="requredActions-section_apply-button">
                                Submit
                            </button>
                        </div>
                        <input type="checkbox" name="agreeCheckbox" id="agreeCheckbox"
                            class="applyInfo-section_personalAgree-checkbox" checked />
                        <label for="agreeCheckbox" class="personalAgree-label">I am agree to sign
                            <a href="#">Personal Data Managment</a></label>
                    </form>
                </div>
            </div>
            <div class="main_FAQ-section" id="FAQ-section">
                <input type="checkbox" name="FAQsection" id="firstQuestion" />
                <label for="firstQuestion" class="FAQ-section_question-block">
                    <div class="question-block_row">
                        <div class="quiestion-block_quiestion-content">
                            Lorem ipsum dolor sit amet?
                        </div>
                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" class="question-block-indicator">
                            <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                <g transform="translate(1.000000, 1.000000)" stroke="#FFFFFF">
                                    <path d="M0,11 L22,11"></path>
                                    <path d="M11,0 L11,22"></path>
                                </g>
                            </g>
                        </svg>
                    </div>

                    <div class="question-block_answer-block">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam.
                    </div>
                </label>
                <input type="checkbox" name="FAQsection" id="secondQuestion" />
                <label for="secondQuestion" class="FAQ-section_question-block">
                    <div class="question-block_row">
                        <div class="quiestion-block_quiestion-content">
                            Lorem ipsum dolor sit amet?
                        </div>
                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" class="question-block-indicator">
                            <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                <g transform="translate(1.000000, 1.000000)" stroke="#FFFFFF">
                                    <path d="M0,11 L22,11"></path>
                                    <path d="M11,0 L11,22"></path>
                                </g>
                            </g>
                        </svg>
                    </div>

                    <div class="question-block_answer-block">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam.

                    </div>
                </label>
                <input type="checkbox" name="FAQsection" id="thirdQuestion" />
                <label for="thirdQuestion" class="FAQ-section_question-block">
                    <div class="question-block_row">
                        <div class="quiestion-block_quiestion-content">
                            Lorem ipsum dolor sit amet?
                        </div>
                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" class="question-block-indicator">
                            <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                <g transform="translate(1.000000, 1.000000)" stroke="#FFFFFF">
                                    <path d="M0,11 L22,11"></path>
                                    <path d="M11,0 L11,22"></path>
                                </g>
                            </g>
                        </svg>
                    </div>

                    <div class="question-block_answer-block">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam.

                    </div>
                </label>
                <input type="checkbox" name="FAQsection" id="fourthQuestion" />
                <label for="fourthQuestion" class="FAQ-section_question-block">
                    <div class="question-block_row">
                        <div class="quiestion-block_quiestion-content">
                            Lorem ipsum dolor sit amet?
                        </div>
                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" class="question-block-indicator">
                            <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                <g transform="translate(1.000000, 1.000000)" stroke="#FFFFFF">
                                    <path d="M0,11 L22,11"></path>
                                    <path d="M11,0 L11,22"></path>
                                </g>
                            </g>
                        </svg>
                    </div>

                    <div class="question-block_answer-block">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam.

                    </div>
                </label>
                <input type="checkbox" name="FAQsection" id="fifthQuestion" />
                <label for="fifthQuestion" class="FAQ-section_question-block">
                    <div class="question-block_row">
                        <div class="quiestion-block_quiestion-content">
                            Lorem ipsum dolor sit amet?
                        </div>
                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" class="question-block-indicator">
                            <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                                <g transform="translate(1.000000, 1.000000)" stroke="#FFFFFF">
                                    <path d="M0,11 L22,11"></path>
                                    <path d="M11,0 L11,22"></path>
                                </g>
                            </g>
                        </svg>
                    </div>

                    <div class="question-block_answer-block">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam.

                    </div>
                </label>
            </div>
        </div>
        <div class="footer">
            <div class="header_logo-section">
                <img src="<?php echo get_template_directory_uri() ?>/app/images/logo/Logo.png" alt=""
                    class="logo-image" />
            </div>
            <div class="footer_link-section">
                <a href="#" class="link-section_user-agreement-link">Personal Data Managment
                </a>
            </div>
            <div class="header_contact-section" style="display: none;">
                <a href="#" class="contact-link">
                    <img src="<?php echo get_template_directory_uri() ?>/app/images/images/instagram.svg" alt=""
                        class="contact-logo" /> </a>
                <a href="#" class="contact-link">
                    <img src="<?php echo get_template_directory_uri() ?>/app/images/images/vk.svg" alt=""
                        class="contact-logo" /> </a>
                <a href="#" class="contact-link">
                    <img src="<?php echo get_template_directory_uri() ?>/app/images/images/telegram.svg" alt=""
                        class="contact-logo" />
                </a>
            </div>
        </div>
        <script src="<?php echo get_template_directory_uri() ?>/app/scripts/index.js"></script>
</body>

</html>