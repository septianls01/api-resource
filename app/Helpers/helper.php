<?php

function sendError($payload, $message)
{
    return response()->json([
        'status' => 'ERROR',
        'message' => $message,
        'sender' => 'Data Indonesia',
        'payload' => $payload,
    ]);
}

function sendSuccess($payload, $message)
{
    return response()->json([
        'status' => 'SUCCESS',
        'message' => $message,
        'sender' => 'Data Indonesia',
        'payload' => $payload,
    ]);
}
