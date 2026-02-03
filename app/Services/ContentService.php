<?php

namespace App\Services;

class ContentService
{
    /**
     * Load JSON data from a file
     *
     * @param string $filename The JSON filename to load
     * @return array|null Returns decoded JSON data or null if file not found
     */
    public function loadJsonData(string $filename): ?array
    {
        $filePath = ROOTPATH . $filename;

        if (!file_exists($filePath)) {
            return null;
        }

        $jsonContent = file_get_contents($filePath);

        if ($jsonContent === false) {
            return null;
        }

        $data = json_decode($jsonContent, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            log_message('error', 'JSON decode error: ' . json_last_error_msg());
            return null;
        }

        return $data;
    }

    /**
     * Get default content as fallback when JSON file is not available
     *
     * @return array Default content structure
     */
    public function getDefaultContent(): array
    {
        return [
            'meta' => [
                'title' => 'IronPDF for C++ - Beta Software Program | Iron Software',
                'description' => 'Sign up for the IronPDF for C++ Beta Program.',
                'keywords' => 'IronPDF, C++, PDF, Beta Program',
                'author' => 'Iron Software',
                'og' => [
                    'type' => 'website',
                    'title' => 'IronPDF for C++ - Beta Software Program',
                    'description' => 'Sign up NOW to get early access to IronPDF for C++.',
                ],
                'twitter' => [
                    'card' => 'summary_large_image',
                    'title' => 'IronPDF for C++ - Beta Software Program',
                    'description' => 'Sign up NOW to get early access to IronPDF for C++.',
                ],
            ],
            'navigation' => [
                'brand' => 'Iron Software',
                'links' => [
                    ['text' => 'PRODUCTS', 'dropdown' => ['IronPDF', 'IronOCR', 'IronBarcode']],
                    ['text' => 'ABOUT US'],
                    ['text' => 'CAREER'],
                ],
            ],
            'hero' => [
                'subtitle' => 'Building on the success of IronPDF for .NET',
                'title' => 'Beta Software Program',
                'product' => 'IronPDF for C++',
                'comingSoon' => 'Coming soon',
            ],
            'signup' => [
                'title' => 'Be one of the first',
                'subtitle' => 'Sign up NOW to get early access!',
                'form' => [
                    'placeholder' => 'Enter email address',
                    'button' => 'Sign up now',
                ],
                'banner' => [
                    'badge' => '# Coming Soon',
                    'text' => 'IronPDF Beta Program also coming soon for',
                    'languages' => ['Python', 'Node.JS', 'Java'],
                ],
            ],
            'features' => [
                'title' => 'IronPDF for C++',
                'badge' => 'Coming Soon',
                'list' => [
                    'Generate PDFs from HTML in C++',
                    'Combine, split, and modify PDFs quickly in C++',
                    'Extract text and images from PDFs using C++',
                ],
                'description' => [
                    'The new IronPDF library for C++ will enhance the C++ developer\'s tool set with robust PDF generation and conversion capabilities.',
                    'IronPDF for C++ will help developers create C++ applications that can do all of these PDF processing tasks and more.',
                ],
            ],
            'whySection' => [
                'title' => 'Why make a C++ PDF Library',
                'highlight' => 'C++ PDF Library',
                'paragraphs' => [
                    'C++ is one of the most popular, oldest, and important programming languages in use.',
                    'The release of IronPDF for C++ will aid developers in building performant applications.',
                ],
            ],
            'earlyAccess' => [
                'title' => 'Early Access to C++ PDF Library',
                'highlight' => 'C++ PDF Library',
                'description' => 'Joining the early access program will allow you to collaborate closely with our engineering team.',
                'products' => [
                    ['badge' => '# Released', 'name' => 'IRONPDF', 'language' => 'for Java', 'status' => 'released'],
                    ['badge' => '# Coming Soon', 'name' => 'IRONPDF', 'language' => 'for Python', 'status' => 'coming-soon'],
                    ['badge' => '# Coming Soon', 'name' => 'IRONPDF', 'language' => 'for NodeJS', 'status' => 'coming-soon'],
                ],
            ],
            'betaSignup' => [
                'title' => 'Sign up to our Beta Program',
                'highlight' => 'Beta Program',
                'form' => [
                    'placeholder' => 'Enter email address',
                    'button' => 'Sign up now',
                ],
            ],
            'accessibility' => [
                'skipLink' => 'Skip to main content',
            ],
        ];
    }
}
