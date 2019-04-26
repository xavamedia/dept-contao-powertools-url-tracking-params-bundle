# dept-contao-powertools-url-params-bundle

This Contao bundle stores url tracking params into the user session and provides the values via insert tags.

## Valid tracking params

The following params will be stored in the user session:

* utm_source
* utm_medium
* utm_campaign
* utm_term
* utm_content
* gclid

## Example usage

Use insert tags to get the values of the session stored url params:

```
{{powertools_url_param::utm_source}}
{{powertools_url_param::utm_medium}}
{{powertools_url_param::utm_campaign}}
{{powertools_url_param::utm_term}}
{{powertools_url_param::utm_content}}
{{powertools_url_param::gclid}}
```
