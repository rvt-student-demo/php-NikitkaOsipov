<?php
class FormManager
{
    public static function isPostrequest()
    {
        return $_SERVER["REQUEST_METHOD"] == "POST";
    }

    public static function isGetrequest()
    {
        return $_SERVER["REQUEST_METHOD"] == "GET";
    }

    public static function saveDataToCsv($array)
    {
        $myfile = fopen("data.csv", "a") or die("Unable to open file!");
        fputcsv($myfile, $array);
    }

    public static function redirectToPage($pageName)
    {
        header("Location: ". $pageName);
        exit();
    }

    /**
     * return empty array if data is valid or array with errors
     */
    public static function validateFormData($formData)
    {
        $formErrors = [];

        if (ctype_alnum($formData[0]))
        {
            $formErrors["name"] = "Name must contain only letters and numbers";
        }
        if (filter_var($formData[1], FILTER_VALIDATE_EMAIL))
        {
            $formErrors["email"] = "Invalid email";
        }
        if (strlen($formData[2]) >= 10)
        {
            $formErrors["Message"] = "Mesage must be at least 10 characters long";
        }

        // !preg_match('/^[a-zA-Z0-9\s]+$/'
        // if (ctype_alnum($formData[0]) 
        //     || filter_var($formData[1], FILTER_VALIDATE_EMAIL) 
        //     || strlen($formData[2]) >= 10)
        // {
        //     $formErrors[] = "Invalid data";
        // }

        return $formErrors;
    }
}