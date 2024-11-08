---
title: addEventListener
---

## Summary

Adds an event listener for user-handling of On-Screen keyboard events.

## Syntax

```c
keyman.osk.addEventListener(eventName, func)
```

### Parameters

`eventName`
:   Type: `string`
:   The name of an event generated by the `keyman.osk` object. See [the Events section](../events) for details and examples.

`func`
:   Type: `function(Object)`
:   A function to be called when the event is raised.

### Return Value

`boolean`

## Description

Standard HTML element events for the On-Screen Keyboard element may also be intercepted and used to modify the user interface if necessary.