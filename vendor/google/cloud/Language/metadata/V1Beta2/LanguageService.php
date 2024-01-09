<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace GPBMetadata\Google\Cloud\Language\V1Beta2;

class LanguageService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�M
4google/cloud/language/v1beta2/language_service.protogoogle.cloud.language.v1beta2google/api/client.protogoogle/api/field_behavior.proto"�
Document:
type (2,.google.cloud.language.v1beta2.Document.Type
content (	H 
gcs_content_uri (	H 
language (	
reference_web_uri (	Y
boilerplate_handling (2;.google.cloud.language.v1beta2.Document.BoilerplateHandling"6
Type
TYPE_UNSPECIFIED 

PLAIN_TEXT
HTML"g
BoilerplateHandling$
 BOILERPLATE_HANDLING_UNSPECIFIED 
SKIP_BOILERPLATE
KEEP_BOILERPLATEB
source"~
Sentence5
text (2\'.google.cloud.language.v1beta2.TextSpan;
	sentiment (2(.google.cloud.language.v1beta2.Sentiment"�
Entity
name (	8
type (2*.google.cloud.language.v1beta2.Entity.TypeE
metadata (23.google.cloud.language.v1beta2.Entity.MetadataEntry
salience (>
mentions (2,.google.cloud.language.v1beta2.EntityMention;
	sentiment (2(.google.cloud.language.v1beta2.Sentiment/
MetadataEntry
key (	
value (	:8"�
Type
UNKNOWN 

PERSON
LOCATION
ORGANIZATION	
EVENT
WORK_OF_ART
CONSUMER_GOOD	
OTHER
PHONE_NUMBER	
ADDRESS

DATE

NUMBER	
PRICE"�
Token5
text (2\'.google.cloud.language.v1beta2.TextSpanC
part_of_speech (2+.google.cloud.language.v1beta2.PartOfSpeechF
dependency_edge (2-.google.cloud.language.v1beta2.DependencyEdge
lemma (	"-
	Sentiment
	magnitude (
score ("�
PartOfSpeech<
tag (2/.google.cloud.language.v1beta2.PartOfSpeech.TagB
aspect (22.google.cloud.language.v1beta2.PartOfSpeech.Aspect>
case (20.google.cloud.language.v1beta2.PartOfSpeech.Case>
form (20.google.cloud.language.v1beta2.PartOfSpeech.FormB
gender (22.google.cloud.language.v1beta2.PartOfSpeech.Gender>
mood (20.google.cloud.language.v1beta2.PartOfSpeech.MoodB
number (22.google.cloud.language.v1beta2.PartOfSpeech.NumberB
person (22.google.cloud.language.v1beta2.PartOfSpeech.PersonB
proper	 (22.google.cloud.language.v1beta2.PartOfSpeech.ProperL
reciprocity
 (27.google.cloud.language.v1beta2.PartOfSpeech.Reciprocity@
tense (21.google.cloud.language.v1beta2.PartOfSpeech.Tense@
voice (21.google.cloud.language.v1beta2.PartOfSpeech.Voice"�
Tag
UNKNOWN 
ADJ
ADP
ADV
CONJ
DET
NOUN
NUM
PRON
PRT		
PUNCT

VERB
X	
AFFIX"O
Aspect
ASPECT_UNKNOWN 

PERFECTIVE
IMPERFECTIVE
PROGRESSIVE"�
Case
CASE_UNKNOWN 

ACCUSATIVE
	ADVERBIAL
COMPLEMENTIVE

DATIVE
GENITIVE
INSTRUMENTAL
LOCATIVE

NOMINATIVE
OBLIQUE	
	PARTITIVE

PREPOSITIONAL
REFLEXIVE_CASE
RELATIVE_CASE
VOCATIVE"�
Form
FORM_UNKNOWN 
ADNOMIAL
	AUXILIARY
COMPLEMENTIZER
FINAL_ENDING

GERUND

REALIS
IRREALIS	
SHORT
LONG		
ORDER

SPECIFIC"E
Gender
GENDER_UNKNOWN 
FEMININE
	MASCULINE

NEUTER"
Mood
MOOD_UNKNOWN 
CONDITIONAL_MOOD

IMPERATIVE

INDICATIVE
INTERROGATIVE
JUSSIVE
SUBJUNCTIVE"@
Number
NUMBER_UNKNOWN 
SINGULAR

PLURAL
DUAL"T
Person
PERSON_UNKNOWN 	
FIRST

SECOND	
THIRD
REFLEXIVE_PERSON"8
Proper
PROPER_UNKNOWN 

PROPER

NOT_PROPER"J
Reciprocity
RECIPROCITY_UNKNOWN 

RECIPROCAL
NON_RECIPROCAL"s
Tense
TENSE_UNKNOWN 
CONDITIONAL_TENSE

FUTURE
PAST
PRESENT
	IMPERFECT

PLUPERFECT"B
Voice
VOICE_UNKNOWN 

ACTIVE
	CAUSATIVE
PASSIVE"�
DependencyEdge
head_token_index (B
label (23.google.cloud.language.v1beta2.DependencyEdge.Label"�
Label
UNKNOWN 

ABBREV	
ACOMP	
ADVCL

ADVMOD
AMOD	
APPOS
ATTR
AUX
AUXPASS	
CC
	
CCOMP
CONJ	
CSUBJ
	CSUBJPASS
DEP
DET
	DISCOURSE
DOBJ
EXPL
GOESWITH
IOBJ
MARK
MWE
MWV
NEG
NN
NPADVMOD	
NSUBJ
	NSUBJPASS
NUM

NUMBER
P 
	PARATAXIS!
PARTMOD"	
PCOMP#
POBJ$
POSS%
POSTNEG&
PRECOMP\'
PRECONJ(

PREDET)
PREF*
PREP+	
PRONL,
PRT-
PS.
QUANTMOD/	
RCMOD0
RCMODREL1	
RDROP2
REF3
REMNANT4

REPARANDUM5
ROOT6
SNUM7
SUFF8
TMOD9	
TOPIC:
VMOD;
VOCATIVE<	
XCOMP=

SUFFIX>	
TITLE?
ADVPHMOD@
AUXCAUSA	
AUXVVB	
DTMODC
FOREIGND
KWE
LISTF
NOMCG
NOMCSUBJH
NOMCSUBJPASSI
NUMCJ
COPK

DISLOCATEDL
ASPM
GMODN
GOBJO

INFMODP
MESQ	
NCOMPR"�
EntityMention5
text (2\'.google.cloud.language.v1beta2.TextSpan?
type (21.google.cloud.language.v1beta2.EntityMention.Type;
	sentiment (2(.google.cloud.language.v1beta2.Sentiment"0
Type
TYPE_UNKNOWN 

PROPER

COMMON"1
TextSpan
content (	
begin_offset (":
ClassificationCategory
name (	

confidence ("�
ClassificationModelOptionsU
v1_model (2A.google.cloud.language.v1beta2.ClassificationModelOptions.V1ModelH U
v2_model (2A.google.cloud.language.v1beta2.ClassificationModelOptions.V2ModelH 	
V1Model�
V2Model~
content_categories_version (2Z.google.cloud.language.v1beta2.ClassificationModelOptions.V2Model.ContentCategoriesVersion"V
ContentCategoriesVersion*
&CONTENT_CATEGORIES_VERSION_UNSPECIFIED 
V1
V2B

model_type"�
AnalyzeSentimentRequest>
document (2\'.google.cloud.language.v1beta2.DocumentB�AB
encoding_type (2+.google.cloud.language.v1beta2.EncodingType"�
AnalyzeSentimentResponseD
document_sentiment (2(.google.cloud.language.v1beta2.Sentiment
language (	:
	sentences (2\'.google.cloud.language.v1beta2.Sentence"�
AnalyzeEntitySentimentRequest>
document (2\'.google.cloud.language.v1beta2.DocumentB�AB
encoding_type (2+.google.cloud.language.v1beta2.EncodingType"k
AnalyzeEntitySentimentResponse7
entities (2%.google.cloud.language.v1beta2.Entity
language (	"�
AnalyzeEntitiesRequest>
document (2\'.google.cloud.language.v1beta2.DocumentB�AB
encoding_type (2+.google.cloud.language.v1beta2.EncodingType"d
AnalyzeEntitiesResponse7
entities (2%.google.cloud.language.v1beta2.Entity
language (	"�
AnalyzeSyntaxRequest>
document (2\'.google.cloud.language.v1beta2.DocumentB�AB
encoding_type (2+.google.cloud.language.v1beta2.EncodingType"�
AnalyzeSyntaxResponse:
	sentences (2\'.google.cloud.language.v1beta2.Sentence4
tokens (2$.google.cloud.language.v1beta2.Token
language (	"�
ClassifyTextRequest>
document (2\'.google.cloud.language.v1beta2.DocumentB�A_
classification_model_options (29.google.cloud.language.v1beta2.ClassificationModelOptions"a
ClassifyTextResponseI

categories (25.google.cloud.language.v1beta2.ClassificationCategory"U
ModerateTextRequest>
document (2\'.google.cloud.language.v1beta2.DocumentB�A"l
ModerateTextResponseT
moderation_categories (25.google.cloud.language.v1beta2.ClassificationCategory"�
AnnotateTextRequest>
document (2\'.google.cloud.language.v1beta2.DocumentB�AR
features (2;.google.cloud.language.v1beta2.AnnotateTextRequest.FeaturesB�AB
encoding_type (2+.google.cloud.language.v1beta2.EncodingType�
Features
extract_syntax (
extract_entities ("
extract_document_sentiment ( 
extract_entity_sentiment (
classify_text (
moderate_text (_
classification_model_options
 (29.google.cloud.language.v1beta2.ClassificationModelOptions"�
AnnotateTextResponse:
	sentences (2\'.google.cloud.language.v1beta2.Sentence4
tokens (2$.google.cloud.language.v1beta2.Token7
entities (2%.google.cloud.language.v1beta2.EntityD
document_sentiment (2(.google.cloud.language.v1beta2.Sentiment
language (	I

categories (25.google.cloud.language.v1beta2.ClassificationCategoryT
moderation_categories (25.google.cloud.language.v1beta2.ClassificationCategory*8
EncodingType
NONE 
UTF8	
UTF16	
UTF322�
LanguageService�
AnalyzeSentiment6.google.cloud.language.v1beta2.AnalyzeSentimentRequest7.google.cloud.language.v1beta2.AnalyzeSentimentResponse"R���("#/v1beta2/documents:analyzeSentiment:*�Adocument,encoding_type�Adocument�
AnalyzeEntities5.google.cloud.language.v1beta2.AnalyzeEntitiesRequest6.google.cloud.language.v1beta2.AnalyzeEntitiesResponse"Q���\'""/v1beta2/documents:analyzeEntities:*�Adocument,encoding_type�Adocument�
AnalyzeEntitySentiment<.google.cloud.language.v1beta2.AnalyzeEntitySentimentRequest=.google.cloud.language.v1beta2.AnalyzeEntitySentimentResponse"X���.")/v1beta2/documents:analyzeEntitySentiment:*�Adocument,encoding_type�Adocument�
AnalyzeSyntax3.google.cloud.language.v1beta2.AnalyzeSyntaxRequest4.google.cloud.language.v1beta2.AnalyzeSyntaxResponse"O���%" /v1beta2/documents:analyzeSyntax:*�Adocument,encoding_type�Adocument�
ClassifyText2.google.cloud.language.v1beta2.ClassifyTextRequest3.google.cloud.language.v1beta2.ClassifyTextResponse"5���$"/v1beta2/documents:classifyText:*�Adocument�
ModerateText2.google.cloud.language.v1beta2.ModerateTextRequest3.google.cloud.language.v1beta2.ModerateTextResponse"5���$"/v1beta2/documents:moderateText:*�Adocument�
AnnotateText2.google.cloud.language.v1beta2.AnnotateTextRequest3.google.cloud.language.v1beta2.AnnotateTextResponse"`���$"/v1beta2/documents:annotateText:*�Adocument,features,encoding_type�Adocument,featuresz�Alanguage.googleapis.com�A]https://www.googleapis.com/auth/cloud-language,https://www.googleapis.com/auth/cloud-platformBz
!com.google.cloud.language.v1beta2BLanguageServiceProtoPZ=cloud.google.com/go/language/apiv1beta2/languagepb;languagepbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

