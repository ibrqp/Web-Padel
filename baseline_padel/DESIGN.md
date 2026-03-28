# Design System Specification: The Padel Aesthetic

## 1. Overview & Creative North Star: "Kinetic Precision"
This design system moves away from the "utility-first" look of standard booking platforms and toward a high-end editorial experience. Our Creative North Star is **Kinetic Precision**. 

The goal is to mirror the geometry of a Padel court: the sharp intersection of glass, turf, and metal. We achieve this through **Intentional Asymmetry**—where large-scale imagery might bleed off the edge of the screen—and **Tonal Layering**, which replaces rigid structural lines with sophisticated color shifts. The interface should feel like a premium sports club: spacious, quiet, yet buzzing with latent energy.

## 2. Colors: The Court & The Club
We utilize a sophisticated Material 3 palette to balance the raw energy of sport with the exclusivity of a private club.

### The Palette
- **Primary (`#006b5f`):** "Court Teal." This is our anchor. Use it for core brand moments and active states.
- **Secondary (`#545e76`):** "Club Navy." This provides the premium weight.
- **Tertiary (`#7d5800`):** "Action Amber." This high-contrast accent is reserved strictly for conversion points (CTAs).
- **Surface Hierarchy:** We use `surface-container-lowest` to `highest` to create a "nested" depth.

### The "No-Line" Rule
**Explicit Instruction:** Do not use 1px solid borders for sectioning. Boundaries must be defined solely through background color shifts. For example, a `surface-container-low` card sitting on a `surface` background creates a natural boundary.

### Signature Textures
- **The Glass Rule:** For floating elements (modals, navigation bars), use `surface-container-low` at 80% opacity with a `20px` backdrop-blur. This makes the UI feel integrated into the "environment" rather than pasted on top.
- **Kinetic Gradients:** Use a subtle linear gradient (135°) from `primary` to `primary_container` on large CTAs to provide a "soul" that flat colors lack.

## 3. Typography: Editorial Authority
We pair **Manrope** (Display/Headline) with **Inter** (Body) to create a hierarchy that feels both athletic and modern.

- **Display (Manrope):** Large, bold, and unapologetic. Use `display-lg` (3.5rem) for hero titles. Tighten the letter-spacing to `-0.02em` for an aggressive, premium look.
- **Headline (Manrope):** Use for section headers. The variable weight of Manrope allows us to use `Medium` or `SemiBold` to convey authority.
- **Body (Inter):** Our workhorse. `body-lg` (1rem) is the standard for readability. Maintain a generous line-height (1.6) to ensure the "spacious" feel.
- **Label (Inter):** Use `label-md` (0.75rem) in all-caps with `0.05em` letter-spacing for category tags or court numbers.

## 4. Elevation & Depth: Tonal Layering
Traditional shadows are a fallback; tonal layering is our standard.

- **The Layering Principle:** Place a `surface-container-lowest` (#ffffff) card on a `surface-container-low` (#f3f4f5) background. This creates a soft, natural lift without the "dirty" look of heavy drop shadows.
- **Ambient Shadows:** When a floating effect is required (e.g., a "Book Now" floating button), use an extra-diffused shadow: `Y: 12px, Blur: 24px, Spread: -4px`. Use a 6% opacity version of `on_surface` (#191c1d) to mimic natural light.
- **The Ghost Border:** If a container needs more definition (e.g., on white backgrounds), use the `outline_variant` token at **15% opacity**. Never use 100% opaque borders.

## 5. Components: Precision Primitives

### Buttons
- **Primary:** High-impact. Background: `primary` or a `primary-to-primary_container` gradient. Text: `on_primary`. Shape: `xl` (1.5rem) for a modern, pill-like feel.
- **CTA:** Reserved for booking. Background: `tertiary`. Text: `on_tertiary`. This provides the "Vibrant Orange" pop requested.
- **Secondary:** Transparent with a `Ghost Border` (outline-variant @ 20%).

### Cards (Court & Match Cards)
- **Rule:** Forbid divider lines. Use vertical white space (`spacing-6`) or a shift from `surface-container-low` to `surface-container-highest` to separate content like "Time" and "Court Type."
- **Interaction:** On hover, a card should scale slightly (1.02x) and transition from `surface-container-low` to `surface-container-lowest`.

### Inputs
- **Style:** Minimalist. No bottom border only. Use a full container with `surface_container_high`.
- **States:** On focus, the container background remains the same, but the `outline` token appears at 40% opacity.

### Padel-Specific Components
- **The "Court Grid" Picker:** A custom component using `primary_fixed` for available slots and `secondary_fixed_dim` for booked slots. Use `spacing-1` as the gutter to mimic the tightness of court fencing.
- **Availability Chips:** Use `secondary_container` for "Morning," "Afternoon," and "Evening" filters. When selected, transition to `primary` with `on_primary` text.

## 6. Do's and Don'ts

### Do:
- **Use "The Breath":** Utilize `spacing-12` (4rem) and `spacing-16` (5.5rem) between major sections to emphasize the premium, minimalist aesthetic.
- **Asymmetric Imagery:** Place court photography slightly off-center to create a sense of movement.
- **High Contrast:** Ensure all "On-Surface" text meets AAA contrast ratios against their respective "Surface" containers.

### Don't:
- **Don't use 1px lines:** They clutter the "Kinetic" energy. Use color blocks.
- **Don't use 100% Black:** Always use `on_background` (#191c1d) or `inverse_surface` (#2e3132) for a more sophisticated, "ink-like" finish.
- **Don't crowd the edges:** Elements should never be closer than `spacing-4` (1.4rem) to the screen edge.

---
*Director's Note: This design system is about the "space between the notes." By removing borders and relying on tonal shifts, we create a platform that feels like a destination, not just a tool.*