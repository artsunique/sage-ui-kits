### x-copyright Component
Displays a semantic copyright notice.

**Basic usage:**  
`<x-copyright />`

**With custom owner:**  
`<x-copyright Owner="My Awesome Company" />`

**With custom class:**  
`<x-copyright class="text-sm text-gray-500 justify-center" />
`
**Props:**
- _Owner_ → Default: "Arts Unique"
- _Designer_ → Default: "Arts Unique" (currently unused)
----
### x-date Component
Outputs a semantic <time> element for the current post, with microdata for SEO.

**Basic usage:**  
<`x-date />`

**With custom class:**  
`<x-date class="text-sm text-gray-500" />`

**Props:**  
(none – relies on WordPress's get_post_time function for current post date)
----
### x-link Component
Renders a semantic `<a>` element with microdata, accessibility, and fallback slot/title handling.

**Basic usage:**  
`<x-link url="https://example.com" title="Example" />`

**With slot content:**  
`<x-link url="https://example.com" title="Example">Visit site</x-link>`

**With custom aria label and target:**  
`<x-link url="https://example.com" title="External" target="_blank" aria="Go to external site" />
`
**Props:**
- _url_ → required (default: "#")
- _title_ → optional (used as fallback for slot)
- _aria_ → optional (default: "Link {title}")
- _target_ → default: "_self"
- _rel_ → default: "noopener noreferrer"
----

