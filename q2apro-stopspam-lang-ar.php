<?php

/*
	Plugin Name: Stop Spam
	Plugin URI: https://github.com/q2apro/q2apro-stop-spam
	Plugin Description: An easy to use customizable captcha with a honeypot that keeps 99 % of the spam away
	Plugin Version: 1.0
	Plugin Date: 2014-02-20
	Plugin Author:  https://github.com/q2apro
	Plugin Author URI: https://github.com/q2apro/q2apro-stop-spam
	Plugin Minimum Question2Answer Version: 1.5
	Plugin Update Check URI: https://github.com/q2apro/q2apro-stop-spam
	
	Licence: Copyright © q2apro.com - All rights reserved

*/


	return array(
		// default
		'enable_plugin' => 'Enable Stop-Spam-Captcha Plugin',
		'contact' => 'للأسئلة يرجى زيارة ^1q2apro.com^2',
		
		'note' => 'Note:',
		'disable_captcha' => 'If you want to disable the captcha, please go to ^1Admin > Spam^2 and choose another captcha module.',
		
		// plugin
		'label_q' => 'سؤال التحقق:',
		'label_a' => 'الإجابة الأولى:',
		'label_a2' => 'الإجابة الثانية:',
		'label_error' => 'رسالة خطأ',
		'captcha_question' => 'ما هو لون السماء ؟ ',
		'captcha_answer' => 'ازرق',
		'captcha_answer2' => 'احمر',
		'captcha_errormsg' => 'إجابتك غير صحيحة.',
		'emails_notallowed' => '*لا يسمح برسائل البريد الإلكتروني*',
		'is_duplicate' => 'يوجد سؤال بهذا العنوان بالفعل. الرجاء إضافة المزيد من التفاصيل.',
		'emaildomain_unwanted' => 'لا يسمح باستخدام Trashmails.',
		'contains_unwanted' => 'المنشور يحتوي على كلمات غير مرغوب فيها:',
		'contains_unwanted_lang' => 'يحتوي المنشور على لغة غير مسموح بها:',
		'too_many_links' => 'يحتوي المنشور على روابط كثيرة جدًا للمواقع الخارجية.',
		'notify_mentioning' => 'أبلغ المسؤول عن طريق البريد الإلكتروني إذا تم العثور على هذا الذكر:',
		'allow_links_count' => 'عدد الروابط المسموح بها لكل منشور:',
		'mask_emails' => 'إزالة عناوين البريد الإلكتروني من المشاركات. مثال: يصبح spam@forum.com ضمن رسائل البريد الإلكتروني غير مسموح بها',
		'remove_linebreaks' => 'إزالة الكثير من الأسطر ودمجها في واحدة. قم أيضًا بإزالة الأسطر الفارغة في نهاية المنشور.',
		'prevent_spamvotes' => 'منع المستخدم الذي يحمل نفس عنوان IP من التصويت لمشاركاته وتحديد إجاباته بأفضل طريقة.',
		'open_page' => 'افتح صفحة:',
		'block_guestswithoutip' => 'لا تسمح للضيوف بدون عنوان IP بالنشر في المموقع.',
		'moderate_post_with_links' => 'اعتدال الوظائف (الإجابات والتعليقات) مع الروابط. سوف نرسلهم إلى ^1moderate queue^2.',
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/