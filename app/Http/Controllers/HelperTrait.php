<?php

namespace App\Http\Controllers;

trait HelperTrait
{
    public string $validationPhone = 'regex:/^((\+)?(\d)(\s)?(\()?[0-9]{3}(\))?(\s)?([0-9]{3})(\-)?([0-9]{2})(\-)?([0-9]{2}))$/';
//    public string $validationDate = 'regex:/^(\d{2})\/(\d{2})\/(\d{4})$/';

//    public $metas = [
//        'meta_description' => ['name' => 'description', 'property' => false],
//        'meta_keywords' => ['name' => 'keywords', 'property' => false],
//        'meta_twitter_card' => ['name' => 'twitter:card', 'property' => false],
//        'meta_twitter_size' => ['name' => 'twitter:size', 'property' => false],
//        'meta_twitter_creator' => ['name' => 'twitter:creator', 'property' => false],
//        'meta_og_url' => ['name' => false, 'property' => 'og:url'],
//        'meta_og_type' => ['name' => false, 'property' => 'og:type'],
//        'meta_og_title' => ['name' => false, 'property' => 'og:title'],
//        'meta_og_description' => ['name' => false, 'property' => 'og:description'],
//        'meta_og_image' => ['name' => false, 'property' => 'og:image'],
//        'meta_robots' => ['name' => 'robots', 'property' => false],
//        'meta_googlebot' => ['name' => 'googlebot', 'property' => false],
//        'meta_google_site_verification' => ['name' => 'google-site-verification', 'property' => false],
//    ];

//    public function getValidationSeo(): array
//    {
//        $validationArr = ['title' => 'nullable|max:255'];
//        foreach ($this->metas as $meta => $params) {
//            $validationArr[$meta] = 'nullable|max:255';
//        }
//        return $validationArr;
//    }

//    public function saveCompleteMessage()
//    {
//        session()->flash('message', trans('admin.save_complete'));
//    }

//    public function sendMessage(string $template, string $mailTo, string|null $cc, array $fields, string|null $pathToFile=null): JsonResponse
//    {
//        dispatch(new SendMessage($template, $mailTo, $cc, $fields, $pathToFile));
//        $message = trans('content.we_will_contact_you');
//        return response()->json(['success' => true, 'message' => $message],200);
//    }
}
