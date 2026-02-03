<?php

namespace App\Controllers;

use App\Services\ContentService;

class Home extends BaseController
{
    protected ContentService $contentService;

    public function __construct()
    {
        $this->contentService = new ContentService();
    }

    /**
     * Display the main landing page
     *
     * @return string
     */
    public function index(): string
    {
        // Load content from JSON data source
        $content = $this->contentService->loadJsonData('content.json');

        if ($content === null) {
            // Fallback if JSON file is not found
            log_message('error', 'Content JSON file not found');
            $content = $this->contentService->getDefaultContent();
        }

        // Pass data to view
        $data = [
            'meta'          => $content['meta'] ?? [],
            'navigation'    => $content['navigation'] ?? [],
            'hero'          => $content['hero'] ?? [],
            'signup'        => $content['signup'] ?? [],
            'features'      => $content['features'] ?? [],
            'whySection'    => $content['whySection'] ?? [],
            'earlyAccess'   => $content['earlyAccess'] ?? [],
            'betaSignup'    => $content['betaSignup'] ?? [],
            'accessibility' => $content['accessibility'] ?? [],
        ];

        return view('templates/header', $data)
             . view('landing/index', $data)
             . view('templates/footer', $data);
    }
}
